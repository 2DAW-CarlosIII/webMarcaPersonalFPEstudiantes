import { HttpError } from 'react-admin';
import dataProvider from '@/Providers/extendedDataProvider';

export const authProvider = {
    login: ({ username, password }) => {
        if (true) {
            return Promise.resolve();
        } else {
            return Promise.reject(
                new HttpError('Unauthorized', 401, {
                    message: 'Invalid username or password',
                })
            );
        }
    },
    logout: () => {
        localStorage.removeItem('user');
        return Promise.resolve();
    },
    checkError: () => Promise.resolve(),
    checkAuth: () =>
        dataProvider.getAuthenticated(),
    getPermissions: () => Promise.reject('Unknown method'),
    getIdentity: () => {
        const persistedUser = localStorage.getItem('user');
        const user = persistedUser ? JSON.parse(persistedUser) : null;

        return Promise.resolve(user);
    },
};

