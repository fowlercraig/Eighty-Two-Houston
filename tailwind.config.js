const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  theme: {
    typography: (theme) => ({
      default: {
        css: {
          lineHeight: '1.5rem',
          color: theme('colors.gray.500'),
          h1: {
            color: theme('colors.gray.200'),
            fontWeight: '700',
            letterSpacing: '-1px',
          },
          h2: {
            color: theme('colors.gray.200'),
            fontWeight: '700',
            letterSpacing: '-1px',
          },
          h3: {
            color: theme('colors.gray.200'),
            fontWeight: '700',
            letterSpacing: '-1px',
            lineHeight: '1.6rem',
          },
          a: {
            color: theme('colors.gray.200'),
            '&:hover': {
              color: theme('colors.white'),
            },
          },
        },
      },
    }),
    container: {
      center: true,
      padding: {
        default: '1rem',
        sm: '2rem',
        lg: '2rem',
        xl: '2rem',
      },
    },
    linearGradientColors: theme => theme('colors'),
    radialGradientColors: theme => theme('colors'),
    conicGradientColors: theme => theme('colors'),
    extend: {
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },
      height: {
        'header-sm': '300px',
        'header-lg': '450px',
        'header-xl': '650px',
      },
      lineHeight: {
        '11': '2.75rem',
        '12': '3rem',
        '13': '3.25rem',
        '14': '3.5rem',
        '15': '3.75rem',
        '16': '4rem',
        '17': '4.25rem',
        '18': '4.5rem',
        '19': '4.75rem',
        '20': '5rem',
      },
      colors: {
        // Brand
        'brand-red': '#cd1611',
        'brand-red-dark': '#cd1611',
        // Whites
        'white-15': 'rgba(255,255,255,.15)',
        'white-25': 'rgba(255,255,255,.25)',
        'white-50': 'rgba(255,255,255,.50)',
        'white-75': 'rgba(255,255,255,.75)',
        // Blacks
        'black-15': 'rgba(0,0,0,.15)',
        'black-25': 'rgba(0,0,0,.25)',
        'black-50': 'rgba(0,0,0,.50)',
        'black-75': 'rgba(0,0,0,.75)',
      }
    }
  },
  variants: {
    textColor: ['responsive', 'hover', 'focus', 'group-hover'],
    transform: ['responsive', 'hover', 'focus', 'group-hover'],
    scale: ['responsive', 'hover', 'focus', 'group-hover'],
    opacity: ['responsive', 'hover', 'focus', 'group-hover'],
    translate: ['responsive', 'hover', 'focus', 'group-hover'],
    border: ['responsive', 'hover', 'focus', 'group-hover'],
  },
  purge: [
    './src/**/*.html',
    './src/**/*.php',
  ],
  plugins: [
    require('@tailwindcss/typography'),
    //require('tailwindcss-gradients'),
  ]
}