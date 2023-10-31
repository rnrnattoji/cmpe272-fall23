<!DOCTYPE html>
<html>
<head>
  <title>SVG Cat</title>
</head>
<body>
  <h1> CAT </h1>
  <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200">
    <!-- Cat's Body -->
    <ellipse cx="100" cy="120" rx="80" ry="100" fill="gray" />

    <!-- Cat's Eyes -->
    <circle cx="70" cy="80" r="10" fill="white" />
    <circle cx="130" cy="80" r="10" fill="white" />

    <!-- Cat's Pupils -->
    <circle cx="70" cy="80" r="5" fill="black" />
    <circle cx="130" cy="80" r="5" fill="black" />

    <!-- Cat's Nose -->
    <circle cx="100" cy="100" r="5" fill="pink" />

    <!-- Cat's Mouth -->
    <path d="M95,110 Q100,120 105,110" fill="none" stroke="black" />

    <!-- Cat's Whiskers -->
    <line x1="60" y1="95" x2="40" y2="90" stroke="black" />
    <line x1="60" y1="100" x2="40" y2="100" stroke="black" />
    <line x1="60" y1="105" x2="40" y2="110" stroke="black" />

    <line x1="140" y1="95" x2="160" y2="90" stroke="black" />
    <line x1="140" y1="100" x2="160" y2="100" stroke="black" />
    <line x1="140" y1="105" x2="160" y2="110" stroke="black" />
  </svg>
</body>
</html>
