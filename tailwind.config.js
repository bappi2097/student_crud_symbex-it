module.exports = {
  future: {
    removeDeprecatedGapUtilities: true,
    purgeLayersByDefault: true,
  },
  purge: [
    './src/**/*.html',
    './src/**/*.vue',
    './src/**/*.jsx',
    './src/**/*.blade.php',
  ],
  theme: {
    extend: {},
  },
  variants: {},
  plugins: [],
}
