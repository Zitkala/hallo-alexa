module.exports = {
  purge: [
      './public/*.php',
  ],
  theme: {
    extend: {},
  },
  variants: {},
  plugins: [],
  // module: {
  //   rules: [
  //     {
  //       use: [
  //         {
  //           loader: 'postcss-loader',
  //           options: {
  //             ident: 'postcss',
  //             plugins: [
  //               require('tailwindcss'),
  //               require('autoprefixer'),
  //             ],
  //           },
  //         }
  //       ]
  //     }
  //   ]
  // }
}
