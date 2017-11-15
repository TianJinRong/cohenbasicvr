<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello, World! - A-Frame</title>
    <meta name="description" content="Hello, World! - A-Frame">
    <script src="<?php echo get_theme_file_uri( '/assets/js/aframe.min.js' )?>"></script>
    <script src="<?php echo get_theme_file_uri( '/assets/js/aframe-text-geometry-component.min.js' )?>"></script>
    <script src="<?php echo get_theme_file_uri( '/assets/js/aframe-layout-component.min.js' )?>"></script>
    <script src="<?php echo get_theme_file_uri( '/assets/js/aframe-href-component.js' )?>"></script>
    <script src="<?php echo get_theme_file_uri( '/assets/js/aframe-mouse-cursor-component.min.js' )?>"></script>
</head>

<body>
    <a-scene >

        <!-- 加载资源 -->
        <a-assets>
            <a-asset-item id="optimerBoldFont" src="<?php echo get_theme_file_uri( '/assets/fonts/Microsoft_YaHei_Regular.json' )?>"></a-asset-item>
        </a-assets>

        <a-entity position="0 1.8 4">
        <a-entity camera look-controls mouse-cursor>
          <!-- <a-cursor fuse="true" color="yellow"></a-cursor> -->
        </a-entity>
      </a-entity>