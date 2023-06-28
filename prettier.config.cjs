/** @type {import("prettier").Config} */
const config = {
  plugins: [require.resolve('prettier-plugin-tailwindcss')],

  //semi: false,
  printWidth: 80,
  singleQuote: true,
  //trailingComma: 'none',
  singleAttributePerLine: false,
};

module.exports = config;
