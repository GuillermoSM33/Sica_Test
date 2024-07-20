const { join } = require('path');

module.exports = {
  async build({ workPath, files, entrypoint, config, meta = {} }) {
    console.log('🐘 Downloading user files');
    const userFiles = await download(files, workPath, meta);
    console.log('🐘 Downloading PHP runtime files');
    await downloadAndExtract(`https://github.com/vercel/php/releases/download/v0.5.2/php.tar.gz`, join(workPath, '.php'));

    const composerJsonPath = join(workPath, 'composer.json');
    const hasComposerJson = await fs.pathExists(composerJsonPath);

    if (hasComposerJson) {
      console.log('🐘 Installing Composer dependencies');
      const composerPharPath = join(workPath, '.php', 'bin', 'composer.phar');
      await runShellCommand('php', [composerPharPath, 'install', '--prefer-dist', '--optimize-autoloader'], {
        cwd: workPath,
      });
    }

    return {
      output: userFiles,
      routes: [
        {
          src: '/(.*)',
          dest: `/api/${entrypoint}`,
        },
      ],
    };
  },
};
