const processor = require('@mvarble/mdx-processor');
const jsYaml = require('js-yaml');
const toml = require('toml');
const fp = require('lodash/fp');

function unstable_shouldOnCreateNode({ node }) {
  return node.internal.mediaType === 'text/mdx';
}

async function onCreateNode(
  { node, actions, loadNodeContent, createNodeId, createContentDigest }
) {

  // only transform `.mdx` files.
  if (!unstable_shouldOnCreateNode({ node })) {
    return;
  }

  // use our processor to transform
  const { createNode, createParentChildLink } = actions;
  const content = await loadNodeContent(node);
  const parsedContent = processor.parse(content);

  // parse the frontmatter, if there is any
  let frontmatter = {};
  const firstNode = fp.get('children[0]')(parsedContent);
  if (firstNode && firstNode.type === 'yaml') {
    frontmatter = jsYaml.load(firstNode.value);
  } else if (firstNode && firstNode.type === 'toml') {
    frontmatter = toml.parse(firstNode.value);
  }
  console.log(frontmatter);


}

exports.unstable_shouldOnCreateNode = unstable_shouldOnCreateNode
exports.onCreateNode = onCreateNode
