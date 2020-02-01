import Vue from 'vue';
import routes from './routes';
import Router from 'vue-router';

Vue.use(Router);

const router = createRouter();

export default router;

/**
 * Create a new router instance.
 *
 * @return {Router}
 */
function createRouter() {
    const router = new Router({
        scrollBehavior,
        mode: 'history',
        routes
    });

    router.beforeEach(beforeEach);
    router.afterEach(afterEach);

    return router;
}

/**
 * Global router guard.
 *
 * @param {Route} to
 * @param {Route} from
 * @param {Function} next
 */
async function beforeEach(to, from, next) {
    let components = []

    try {
        // Get the matched components and resolve them.
        components = await resolveComponents(
            router.getMatchedComponents({ ...to })
        );
    } catch (error) {
        if (/^Loading( CSS)? chunk (\d)+ failed\./.test(error.message)) {
            window.location.reload(true);
            return;
        }
    }

    if (components.length === 0) {
        return next();
    }

    // Start the loading bar.
    if (components[components.length - 1].loading !== false) {
        router.app.$nextTick(() => router.app.$loading.start())
    }

    // Call each middleware
    callMiddleware(to, from, (...args) => {
        // Set the application layout only if "next()" was called with no args.
        if (args.length === 0) {
            router.app.setLayout(components[0].layout || '');
        }

        next(...args);
    });
}

/**
 * Global after hook.
 *
 * @param {Route} to
 * @param {Route} from
 * @param {Function} next
 */
async function afterEach(to, from, next) {
    await router.app.$nextTick()

    router.app.$loading.finish()
}

/**
 * Call each middleware.
 *
 * @param {Array} middleware
 * @param {Route} to
 * @param {Route} from
 * @param {Function} next
 */
function callMiddleware(to, from, next) {
    const _next = (...args) => {
        if (args.length > 0) {
            router.app.$loading.finish();
        }

        return next(...args);
    }

    _next();
}

/**
 * Resolve async components.
 *
 * @param  {Array} components
 * @return {Array}
 */
function resolveComponents(components) {
    return Promise.all(components.map(component => {
        return typeof component === 'function' ? component() : component
    }))
}

/**
 * Scroll Behavior
 *
 * @link https://router.vuejs.org/en/advanced/scroll-behavior.html
 *
 * @param  {Route} to
 * @param  {Route} from
 * @param  {Object|undefined} savedPosition
 * @return {Object}
 */
function scrollBehavior(to, from, savedPosition) {
    if (savedPosition) {
        return savedPosition
    }

    if (to.hash) {
        return { selector: to.hash }
    }

    const [component] = router.getMatchedComponents({ ...to }).slice(-1)

    if (component && component.scrollToTop === false) {
        return {}
    }

    return { x: 0, y: 0 }
}