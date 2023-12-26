import React from "react";
import tshirtMockup from "./images/tshirt-mockup.png"; // Replace with your T-shirt mockup image

const OutputPage = ({ generatedImage }) => {
  return (
    <div>
      <h2>Generated Design</h2>
      <img src={tshirtMockup} alt="T-shirt Mockup" />
      <img src={generatedImage} alt="Generated Art" className="generated-image" />
    </div>
  );
};

export default OutputPage;
