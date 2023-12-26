import React, { useState } from "react";
import "./ImageGenerationForm.css";
import logo from "./images/logo.png";
import DesignPreview from "./DesignPreview";
import OutputPreview from "./OutputPreview"; // Import the OutputPreview component


const API_TOKEN = "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";

const ImageGenerationForm = () => {
  const [loading, setLoading] = useState(false);
  const [output, setOutput] = useState(null);
  const [prompt, setPrompt] = useState({
    type: "galaxy",
    object: "",
    color: "",
  });
  const [previewVisible, setPreviewVisible] = useState(false);// Track whether the preview is visible


  const handlePromptChange = (event) => {
    const { name, value } = event.target;
    setPrompt({
      ...prompt,
      [name]: value,
    });
  };

  const handleSubmit = async (event) => {
    event.preventDefault();
    setLoading(true);

    let input = "";

    if (prompt.type === "galaxy") {
      input = `A galaxy-themed design featuring a ${prompt.object} wearing a space helmet ${prompt.color} color, black background, dark background`;
    } else if (prompt.type === "detailed") {
      input = `A detailed illustration ${prompt.object}, magic, ${prompt.color} color, dark background, black background, black outer, dark magic splash, dark, gothic, in the style of Studio Ghibli, da pastel tetradic colors, 30 vector art, cute and quirky, fantasy art, watercolor effect, bokeh, Adobe Illustrator, hand-drawn, digital painting, low-poly, soft lighting, bird's-eye view, isometric style, retro aesthetic, focused on the character, 4K resolution, photorealistic rendering, using Cinema 4`;
    }

    const response = await fetch(
      "https://api-inference.huggingface.co/models/prompthero/openjourney",
      {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          Authorization: `Bearer ${API_TOKEN}`,
        },
        body: JSON.stringify({ inputs: input }),
      }
    );

    if (!response.ok) {
      throw new Error("Failed to generate image");
    }

    const blob = await response.blob();
    setOutput(URL.createObjectURL(blob));
    setLoading(false);
  };
  const openDesignPreview = () => {
    if (output) {
      // Open the design preview in a new window or tab
      const previewWindow = window.open("", "_blank");
      if (previewWindow) {
        previewWindow.document.write("<html><head><title>Design Preview</title></head><body>");
        previewWindow.document.write(`<img src="${output}" alt="Generated Design" />`);
        previewWindow.document.write("<button onclick='window.close()'>Close</button>");
        previewWindow.document.write("</body></html>");
        previewWindow.document.close();
        setPreviewVisible(true); // Set preview visibility to true
      }
    }
  };

  return (
    <div className="container al-c mt-3">
      <div className="logo-container">
        <img src={logo} alt="Logo" className="logo" />
      </div>
      <div className="form-and-result">
        <form className="gen-form" onSubmit={handleSubmit}>
          <div className="form-group">
            <label htmlFor="type">Type:</label>
            <select
              name="type"
              value={prompt.type}
              onChange={handlePromptChange}
              className="select-modern"
            >
              <option value="galaxy">Type 1</option>
              <option value="detailed">Type 2</option>
            </select>
          </div>
          <div className="form-group">
            <label>Object:</label>
            <input
              type="text"
              name="object"
              value={prompt.object}
              onChange={handlePromptChange}
            />
          </div>
          <div className="form-group">
            <label>Color:</label>
            <input
              type="text"
              name="color"
              value={prompt.color}
              onChange={handlePromptChange}
            />
          </div>
          <button type="submit">Generate</button>
        </form>

        <div className="output">
          {loading && <div className="loading">Generating...</div>}
          {!loading && output && (
            <div className="result-image">
              <img src={output} alt="art" />
            </div>
          )}
          {output && (
            <div className="use-design-button">
              <button className="usethis" onClick={openDesignPreview}>Use This Design</button>
            </div>
          )}
      </div>
        {/* Conditionally render the DesignPreview component */}
        {previewVisible && <DesignPreview imageUrl={output} />} 
        
      </div>
    </div>
  );
};


export default ImageGenerationForm;