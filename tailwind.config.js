module.exports = {
  future: {
    removeDeprecatedGapUtilities: true,
    purgeLayersByDefault: true,
  },
  purge: [
    './src/**/*.html',
    './src/**/*.vue',
    './src/**/*.jsx',
    './**/*.blade.php',
  ],
  theme: {
    extend: {},
    fontFamily: {
      'sans': ['Lato', 'Sans-serif'],
    }
  },
  variants: {},
  plugins: [],
}
