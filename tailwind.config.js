module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      colors: {
        primary: '#504e4e'
      },
      zIndex: {
        '2': '2',
        '3': '3',
        '4': '4',
        '5': '5',
      }
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
