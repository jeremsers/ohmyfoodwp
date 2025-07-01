import { defineConfig } from "vite";
export default defineConfig({
    root: ".",
    base: "",
    build: {
        outDir: "dist",
        emptyOutDir: true,
        manifest: true,
        rollupOptions: {
            input: {
                main: "src/main.js",
                styles: "src/styles.scss"
            }
        },
    },
    server: {
        cors : {
            origin: '*'
        },
        origin: "*",
        host: "localhost",
        port: 3000,
        strictPort: true,
    },
});