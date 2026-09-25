import { defineConfig } from 'vite';

export default defineConfig({
  base: '/wp-content/themes/bhsinnovationfund2026/assets/dist/',
  build: {
    outDir: 'assets/dist',
    emptyOutDir: true,
    manifest: false,
    cssCodeSplit: false,
    rollupOptions: {
      input: 'src/js/app.js',
      output: {
        entryFileNames: 'app.js',
        assetFileNames: (assetInfo) => {
          const assetName = assetInfo.names?.[0] || '';
          if (assetName.endsWith('.css')) {
            return 'app.[ext]';
          }
          if (/\.(woff|woff2|eot|ttf|otf)$/.test(assetName)) {
            return 'fonts/[name].[ext]'; // Outputs to assets/dist/fonts/
          }
          return '[name].[ext]';
        },
      },
    },
  },
});
