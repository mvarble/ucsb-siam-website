import { createProcessor } from '@mdx-js/mdx';
import remarkFrontmatter from 'remark-frontmatter';
import remarkMath from 'remark-math';
import rehypeKatex from 'rehype-katex';

export default createProcessor({
  remarkPlugins: [remarkFrontmatter, remarkMath],
  rehypePlugins: [rehypeKatex],
});
