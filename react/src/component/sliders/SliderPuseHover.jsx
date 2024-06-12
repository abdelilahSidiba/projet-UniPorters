// ImageSlider.jsx
import React, { useState, useEffect } from 'react';
import styles from './SliderPuseHover.module.css';

const ImageSlider = () => {
  const images = [
    '/image-14@2x.png',
    '/image-47@2x.png',
    '/image-48@2x.png',
  ];

  const [currentIndex, setCurrentIndex] = useState(0);

  useEffect(() => {
    const interval = setInterval(() => {
      setCurrentIndex((prevIndex) => (prevIndex + 1) % images.length);
    }, 5000); // تغيير الصورة كل 3 ثواني

    return () => clearInterval(interval); // تنظيف المؤقت عند إلغاء المكون
  }, [images.length]);

  const nextSlide = () => {
    setCurrentIndex((prevIndex) => (prevIndex + 1) % images.length);
  };

  const prevSlide = () => {
    setCurrentIndex((prevIndex) => (prevIndex - 1 + images.length) % images.length);
  };

  return (
    <div className={styles.sliderContainer}>
      <button onClick={prevSlide} className={styles.navButton}>❮</button>
      <div className={styles.imageContainer}>
        {images.map((image, index) => (
          <img
            key={index}
            src={image}
            
            className={`${styles.image} ${
              index === currentIndex ? styles.active : ''
            } ${index === (currentIndex - 1 + images.length) % images.length ? styles.prev : ''} ${
              index === (currentIndex + 1) % images.length ? styles.next : ''
            }`}
          />
        ))}
      </div>
      <button onClick={nextSlide} className={styles.navButton}> ❯ </button>
    </div>
  );
};

export default ImageSlider;
