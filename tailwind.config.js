const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  purge: [],
  theme: {
    container: {
      center: true,
      padding: {
        default: '1rem',
        xs: '.5rem',
        sm: '.5rem',
        lg: '2rem',
        xl: '2rem',
      },
    },
    typography: (theme) => ({
      default: {
        css: {
          color: theme('colors.white'),
          lineHeight: '140%',
          '.form-input': {
            color: theme('colors.white'),
            borderRadius: theme('borderRadius.none'),
            borderColor: 'rgba(255,255,255,.5)',
            backgroundColor: theme('colors.transparent'),
            marginBottom: '8px',
          },
          '.form-textarea': {
            color: theme('colors.white'),
            borderRadius: theme('borderRadius.none'),
            borderColor: 'rgba(255,255,255,.5)',
            backgroundColor: theme('colors.transparent'),
            marginBottom: '8px',
            maxHeight: theme('spacing.32'),
          },
          '.form-select': {
            color: theme('colors.white'),
            borderRadius: theme('borderRadius.none'),
            borderColor: 'rgba(255,255,255,.5)',
            backgroundColor: theme('colors.transparent'),
            marginBottom: '8px',
          },
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
        'divider': '2px',
      },
      height: {
        'mh': 'calc(var(--vh, 1vh) * 100)'
      },
      maxHeight: {
        '32': '200px',
      },
      opacity: {
        '10': '0.1',
        '20': '0.2',
        '95': '0.95',
      }
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
