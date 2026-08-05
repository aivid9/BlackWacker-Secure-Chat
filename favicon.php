<?php
/**
 * Favicon Handler
 * Returns a simple SVG favicon
 */

header('Content-Type: image/svg+xml; charset=utf-8');
header('Cache-Control: public, max-age=86400');

echo <<<'SVG'
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
  <defs>
    <style>
      .bg { fill: #667eea; }
      .chat { fill: white; }
    </style>
  </defs>
  <rect class="bg" width="100" height="100" rx="20"/>
  <g class="chat" transform="translate(20, 25)">
    <path d="M 0 0 L 60 0 Q 60 0 60 10 L 60 35 Q 60 45 50 45 L 15 45 L 5 55 L 10 45 L 10 45 Q 0 45 0 35 L 0 10 Q 0 0 0 0" stroke="white" stroke-width="2" fill="none"/>
    <circle cx="15" cy="25" r="3" fill="white"/>
    <circle cx="30" cy="25" r="3" fill="white"/>
    <circle cx="45" cy="25" r="3" fill="white"/>
  </g>
</svg>
SVG;
?>
