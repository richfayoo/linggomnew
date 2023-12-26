import React from "react";
import { BrowserRouter as Router, Route, Routes } from "react-router-dom";
import ImageGenerationForm from "./components/ImageGen";
import OutputPreview  from "./components/ImageGen";


const App = () => {
  return (
    <Router>
      <Routes>
        <Route path="/" element={<ImageGenerationForm />} />
        <Route path="/output" element={<OutputPreview />} />
      </Routes>
    </Router>
  );
};

export default App;
