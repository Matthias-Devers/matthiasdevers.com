import React, { useRef, useEffect } from "react";

const Canvas: React.FC = () => {
    const canvasRef = useRef<HTMLCanvasElement | null>(null);

    const resizeCanvas = () => {
        if (canvasRef.current) {
            canvasRef.current.width = window.innerWidth;
            canvasRef.current.height = window.innerHeight;
        }
    };

    useEffect(() => {
        window.addEventListener("resize", resizeCanvas);
        resizeCanvas();

        return () => {
            window.removeEventListener("resize", resizeCanvas);
        };
    }, []);

    useEffect(() => {
        const canvas = canvasRef.current;
        if (canvas) {
            const context = canvas.getContext("2d");
            if (context) {
                // Draw your content here
                context.fillStyle = "red";
                context.fillRect(50, 50, 100, 100);
            }
        }
    }, []);

    return <canvas ref={canvasRef} />;
};

export default Canvas;
