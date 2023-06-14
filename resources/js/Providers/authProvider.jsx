import { HttpError } from 'react-admin';
import dataProvider from '@/Providers/extendedDataProvider';

export const authProvider = {
    login: ({ username, password }) => {
        return Promise.resolve();
    },
    logout: () => {
        localStorage.removeItem('user');
        return Promise.resolve();
    },
    checkError: (error) => {
        const status = error.status;
        if (status === 401 || status === 403) {
            localStorage.removeItem('auth');
            return Promise.reject();
        }
        // other error code (404, 500, etc): no need to log out
        return Promise.resolve();
    },
    checkAuth: () =>
        dataProvider.getAuthenticated(),
    getPermissions: () => Promise.resolve(),
    getIdentity: async () => {
        const response = await dataProvider.getAuthenticated()
        return Promise.resolve(response.json)
    },
};

