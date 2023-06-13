import { fetchUtils } from 'react-admin';
import jsonServerProvider from 'ra-data-json-server';

const httpClient = (url, options = {}) => {
    if (!options.headers) {
        options.headers = new Headers({ Accept: 'application/json' });
    }
    // add your own headers here
//    options.headers.set('Access-Control-Expose-Headers', 'X-Total-Count');
    return fetchUtils.fetchJson(url, options);
};

export const dataProvider = jsonServerProvider(
    import.meta.env.APP_URL + '/api',
    httpClient
);
