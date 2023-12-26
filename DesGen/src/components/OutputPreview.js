import { Link } from "react-router-dom";

const OutputPreview = () => {
  // Retrieve the generated image URL from somewhere
  const imageUrl = "your_generated_image_url";

  // Function to handle image download
  const handleDownload = () => {
    // You can implement the logic to trigger the download here
    // For example, create a hidden anchor element and trigger a click event
    const downloadLink = document.createElement("a");
    downloadLink.href = imageUrl;
    downloadLink.download = "design_image.png";
    downloadLink.click();
  };

  return (
    <div>
      <img src={imageUrl} alt="Generated Design" />
      <button onClick={handleDownload}>Download</button>
      <Link to="/">Go Back</Link>
    </div>
  );
};

export default OutputPreview;
