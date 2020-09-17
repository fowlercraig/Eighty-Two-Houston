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
          color: theme('colors.white'),
          lineHeight: '140%',
          strong: {
            color: theme('colors.white'),
          },
          a: {
            color: theme('colors.white'),
          },
          p: {
            lineHeight: '140%',
          }
        }
      },
      'lg': {
        lineHeight: '140%',
        p: {
          lineHeight: '140%',
        }
      },
      'xl': {
        lineHeight: '140%',
        p : {
          lineHeight: '140%',
        }
      }
    }),
    extend: {
      fontFamily: {
        sans: ['Barlow', ...defaultTheme.fontFamily.sans],
      },
      spacing: {
        'divider': '2px'
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
