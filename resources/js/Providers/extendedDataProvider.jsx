import { dataProvider } from "./dataProvider";
import { fetchUtils } from 'ra-core';

// A function decorating a dataProvider for handling user profiles
const addCustomDataProviderMethods = dataProvider => ({
    ...dataProvider,
    getAuthenticated() {
        const httpClient = fetchUtils.fetchJson
        const url = '/api/user';
        return httpClient(url)
    },
    getUserProfile(params) {
      const storedProfile = localStorage.getItem("profile");

      if (storedProfile) {
          return Promise.resolve({
              data: JSON.parse(storedProfile),
          });
      }

      // No profile yet, return a default one
      return Promise.resolve({
          data: {
            // As we are only storing this information in the localstorage, we don't really care about this id
            id: 'unique-id',
            fullName: "",
            avatar: ""
          },
      });
    },
    logout() {
        const httpClient = fetchUtils.fetchJson
        const url = '/api/logout';
        return httpClient(url)
    },

    updateUserProfile(params) {
      localStorage.setItem("profile", JSON.stringify({ id: 'unique-id', ...params.data }));
      return Promise.resolve({ data: params.data });
    }
  });

  export default addCustomDataProviderMethods(
    dataProvider
  );

