import { defineConfig } from 'vite';

export default defineConfig({
  build: {
    outDir: 'assets/dist',
    emptyOutDir: true,
    manifest: false,
    rollupOptions: {
      input: 'src/js/app.js',
      output: {
        entryFileNames: 'app.js',
        assetFileNames: 'app.css',
      },
    },
  },
});
