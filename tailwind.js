var colors = {
  transparent: "transparent",
  black: "#222b2f",
  "grey-darkest": "#364349",
  "grey-darker": "#596a73",
  "grey-dark": "#70818a",
  grey: "#9babb4",
  "grey-light": "#dae4e9",
  "grey-lighter": "#f3f7f9",
  "grey-lightest": "#fafcfc",
  white: "#ffffff",
  "red-darkest": "#420806",
  "red-darker": "#6a1b19",
  "red-dark": "#cc1f1a",
  red: "#e3342f",
  "red-light": "#ef5753",
  "red-lighter": "#f9acaa",
  "red-lightest": "#fcebea",
  "orange-darkest": "#542605",
  "orange-darker": "#7f4012",
  "orange-dark": "#de751f",
  orange: "#f6993f",
  "orange-light": "#faad63",
  "orange-lighter": "#fcd9b6",
  "orange-lightest": "#fff5eb",
  "yellow-darkest": "#453411",
  "yellow-darker": "#684f1d",
  "yellow-dark": "#f2d024",
  yellow: "#ffed4a",
  "yellow-light": "#fff382",
  "yellow-lighter": "#fff9c2",
  "yellow-lightest": "#fcfbeb",
  "green-darkest": "#032d19",
  "green-darker": "#0b4228",
  "green-dark": "#1f9d55",
  green: "#38c172",
  "green-light": "#51d88a",
  "green-lighter": "#a2f5bf",
  "green-lightest": "#e3fcec",
  "teal-darkest": "#0d3331",
  "teal-darker": "#174e4b",
  "teal-dark": "#38a89d",
  teal: "#4dc0b5",
  "teal-light": "#64d5ca",
  "teal-lighter": "#a0f0ed",
  "teal-lightest": "#e8fffe",
  "blue-darkest": "#05233b",
  "blue-darker": "#103d60",
  "blue-dark": "#2779bd",
  blue: "#3490dc",
  "blue-light": "#6cb2eb",
  "blue-lighter": "#bcdefa",
  "blue-lightest": "#eff8ff",
  "indigo-darkest": "#191e38",
  "indigo-darker": "#2f365f",
  "indigo-dark": "#5661b3",
  indigo: "#6574cd",
  "indigo-light": "#7886d7",
  "indigo-lighter": "#b2b7ff",
  "indigo-lightest": "#e6e8ff",
  "purple-darkest": "#1f133f",
  "purple-darker": "#352465",
  "purple-dark": "#794acf",
  purple: "#9561e2",
  "purple-light": "#a779e9",
  "purple-lighter": "#d6bbfc",
  "purple-lightest": "#f3ebff",
  "pink-darkest": "#45051e",
  "pink-darker": "#72173a",
  "pink-dark": "#eb5286",
  pink: "#f66d9b",
  "pink-light": "#fa7ea8",
  "pink-lighter": "#ffbbca",
  "pink-lightest": "#ffebef",
  get ["brand-darkest"]() {
    return this["blue-darkest"];
  },
  get ["brand-darker"]() {
    return this["blue-darker"];
  },
  get ["brand-dark"]() {
    return this["blue-dark"];
  },
  get ["brand"]() {
    return this["blue"];
  },
  get ["brand-light"]() {
    return this["blue-light"];
  },
  get ["brand-lighter"]() {
    return this["blue-lighter"];
  },
  get ["brand-lightest"]() {
    return this["blue-lightest"];
  }
};
module.exports = {
  colors: colors,
  screens: {
    sm: "576px",
    md: "768px",
    lg: "992px",
    xl: "1200px"
  },
  fonts: {
    sans: [
      "-apple-system",
      "Source Sans Pro",
      "BlinkMacSystemFont",
      "Segoe UI",
      "Roboto",
      "Oxygen",
      "Ubuntu",
      "Cantarell",
      "Fira Sans",
      "Droid Sans",
      "Helvetica Neue",
      "sans-serif"
    ],
    serif: [
      "Lora",
      "Constantia",
      "Lucida Bright",
      "Lucidabright",
      "Lucida Serif",
      "Lucida",
      "DejaVu Serif",
      "Bitstream Vera Serif",
      "Liberation Serif",
      "Georgia",
      "serif"
    ],
    mono: [
      "Source Code Pro",
      "Menlo",
      "Monaco",
      "Consolas",
      "Liberation Mono",
      "Courier New",
      "monospace"
    ]
  },
  textSizes: {
    xs: ".75rem", 
    sm: ".875rem", 
    base: "1rem", 
    lg: "1.125rem", 
    xl: "1.25rem", 
    "2xl": "1.5rem", 
    "3xl": "1.875rem", 
    "4xl": "2.25rem", 
    "5xl": "3rem" 
  },
  fontWeights: {
    hairline: 100,
    thin: 200,
    light: 300,
    normal: 400,
    medium: 500,
    semibold: 600,
    bold: 700,
    extrabold: 800,
    black: 900
  },
  leading: {
    none: 1,
    tight: 1.25,
    normal: 1.5,
    loose: 2
  },
  tracking: {
    tight: "-0.05em",
    normal: "0",
    wide: "0.05em"
  },
  textColors: colors,
  backgroundColors: colors,
  borderWidths: {
    default: "1px",
    "0": "0",
    "2": "2px",
    "4": "4px",
    "8": "8px"
  },
  borderColors: Object.assign({ default: colors["grey-light"] }, colors),
  borderRadius: {
    none: "0",
    sm: ".125rem",
    default: ".25rem",
    lg: ".5rem",
    full: "9999px"
  },
  width: {
    auto: "auto",
    px: "1px",
    "1": "0.25rem",
    "2": "0.5rem",
    "3": "0.75rem",
    "4": "1rem",
    "6": "1.5rem",
    "8": "2rem",
    "10": "2.5rem",
    "12": "3rem",
    "16": "4rem",
    "24": "6rem",
    "32": "8rem",
    "48": "12rem",
    "64": "16rem",
    "1/2": "50%",
    "1/3": "33.33333%",
    "2/3": "66.66667%",
    "1/4": "25%",
    "3/4": "75%",
    "1/5": "20%",
    "2/5": "40%",
    "3/5": "60%",
    "4/5": "80%",
    "1/6": "16.66667%",
    "5/6": "83.33333%",
    full: "100%",
    screen: "100vw"
  },
  height: {
    auto: "auto",
    px: "1px",
    "1": "0.25rem",
    "2": "0.5rem",
    "3": "0.75rem",
    "4": "1rem",
    "6": "1.5rem",
    "8": "2rem",
    "10": "2.5rem",
    "12": "3rem",
    "16": "4rem",
    "24": "6rem",
    "32": "8rem",
    "48": "12rem",
    "64": "16rem",
    full: "100%",
    screen: "100vh"
  },
  minWidth: {
    "0": "0",
    full: "100%"
  },
  minHeight: {
    "0": "0",
    full: "100%",
    screen: "100vh"
  },
  maxWidth: {
    xs: "20rem",
    sm: "30rem",
    md: "40rem",
    lg: "50rem",
    xl: "60rem",
    "2xl": "70rem",
    "3xl": "80rem",
    "4xl": "90rem",
    "5xl": "100rem",
    full: "100%"
  },
  maxHeight: {
    full: "100%",
    screen: "100vh"
  },
  padding: {
    px: "1px",
    "0": "0",
    "1": "0.25rem",
    "2": "0.5rem",
    "3": "0.75rem",
    "4": "1rem",
    "6": "1.5rem",
    "8": "2rem"
  },
  margin: {
    auto: "auto",
    px: "1px",
    "0": "0",
    "1": "0.25rem",
    "2": "0.5rem",
    "3": "0.75rem",
    "4": "1rem",
    "6": "1.5rem",
    "8": "2rem"
  },
  negativeMargin: {
    px: "1px",
    "0": "0",
    "1": "0.25rem",
    "2": "0.5rem",
    "3": "0.75rem",
    "4": "1rem",
    "6": "1.5rem",
    "8": "2rem"
  },
  shadows: {
    default: "0 2px 4px 0 rgba(0,0,0,0.10)",
    md: "0 4px 8px 0 rgba(0,0,0,0.12), 0 2px 4px 0 rgba(0,0,0,0.08)",
    lg: "0 15px 30px 0 rgba(0,0,0,0.11), 0 5px 15px 0 rgba(0,0,0,0.08)",
    inner: "inset 0 2px 4px 0 rgba(0,0,0,0.06)",
    none: "none"
  },
  zIndex: {
    auto: "auto",
    "0": 0,
    "10": 10,
    "20": 20,
    "30": 30,
    "40": 40,
    "50": 50
  },
  opacity: {
    "0": "0",
    "25": ".25",
    "50": ".5",
    "75": ".75",
    "100": "1"
  },
  options: {
    prefix: "",
    important: false
  }
};
