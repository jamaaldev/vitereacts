import React from "react";
import { render } from "@wordpress/element";

import App from "./App";
import "./index.css";
render(
  <React.StrictMode>
    <App />
  </React.StrictMode>,

  document.getElementById("root"),
);
// ReactDOM.createRoot(document.getElementById("root")).render(
//   <React.StrictMode>
//     <App />
//     <Dashboard />
//   </React.StrictMode>,
// );
