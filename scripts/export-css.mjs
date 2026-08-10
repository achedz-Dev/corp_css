import { copyFile, mkdir } from 'node:fs/promises';
import { dirname, resolve } from 'node:path';

const source = resolve('resources/css/umpsa.css');
const target = resolve('public/css/umpsa.css');

await mkdir(dirname(target), { recursive: true });
await copyFile(source, target);

console.log(`Exported ${source} to ${target}`);

