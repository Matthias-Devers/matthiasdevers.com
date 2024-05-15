import globals from "globals";
import pluginJs from "@eslint/js";
import tseslint from "typescript-eslint";
import pluginReactConfig from "eslint-plugin-react/configs/recommended.js";
import pluginAstro from "eslint-plugin-astro";
import pluginPrettier from "eslint-plugin-prettier";

export default [
    { languageOptions: { globals: globals.browser } },
    pluginJs.configs.recommended,
    ...tseslint.configs.recommended,
    pluginReactConfig.recommended,
    pluginAstro.configs.recommended,
    pluginPrettier.configs.recommended,
];
