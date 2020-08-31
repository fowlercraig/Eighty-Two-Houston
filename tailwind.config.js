const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  purge: [],
  theme: {
    container: {
      center: true,
      padding: {
        default: '1rem',
        sm: '2rem',
        lg: '2rem',
        xl: '2rem',
      },
    },
    typography: (theme) => ({
      default: {
        css: {
          color: theme('colors.gray.300'),
        }
      }
    }),
    extend: {
      fontFamily: {
        sans: ['Barlow', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
    require('tailwindcss-writing-mode')({
      variants: ['responsive', 'hover']
    })
  ],
  experimental: {
    uniformColorPalette: true,
    extendedSpacingScale: true,
    extendedFontSizeScale: true,
  },
}
