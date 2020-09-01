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
          strong: {
            color: theme('colors.white'),
          },
          a: {
            color: theme('colors.white'),
          },
        }
      }
    }),
    extend: {
      fontFamily: {
        sans: ['Barlow', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  variants: {
    opacity: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
  },
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
