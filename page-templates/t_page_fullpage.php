<?php
/*
Template Name: Página ancho fluido
Template Post Type: page
*/

    get_header();
?>
<section class="hero_post">
    <div class="container">
    <?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs" class="breadcrumb">','</p>' );
			}
		?>
        <h1 class="f-p h1 hero_post_title">
            <?php the_title();?>
        </h1>
    </div>

    <svg id="Capa_1" data-name="Capa 1" viewBox="0 0 967 555">
    <defs>
        <clipPath id="clippath">
        <rect x="-477" y="-262.92" width="1444" height="819.92" style="fill: none; stroke-width: 0px;"/>
        </clipPath>
        <clipPath id="clippath-1">
        <rect x="-477" y="-262.92" width="1444" height="819.92" style="fill: none; stroke-width: 0px;"/>
        </clipPath>
        <clipPath id="clippath-2">
        <polygon points="-586.9 -184.72 1600.18 -612.03 1880.29 848.86 -306.79 1276.17 -586.9 -184.72" style="fill: none; stroke-width: 0px;"/>
        </clipPath>
        <clipPath id="clippath-3">
        <polygon points="-586.9 -184.72 1600.18 -612.03 1880.29 848.86 -306.79 1276.17 -586.9 -184.72" style="fill: none; stroke-width: 0px;"/>
        </clipPath>
    </defs>
    <g style="clip-path: url(#clippath);">
        <g style="isolation: isolate; opacity: .58;">
        <g style="clip-path: url(#clippath-1);">
            <g style="clip-path: url(#clippath-2);">
            <g style="clip-path: url(#clippath-3);">
                <path d="M1800.22,846.13c-42.16,8.24-89.95-2.17-125.29-25.74-60.15-40.17-95.24-107.08-126-172.15l-5.21-11.06c-28.86-61.25-58.68-124.57-109.34-168.93-69.87-61.16-179.86-81.02-287.11-51.77-100.8,27.49-189.49,91.44-262.97,150.37-17.01,13.67-34.2,27.79-50.79,41.48-61.06,50.31-124.19,102.31-194.07,141.63-47.32,26.62-96.27,43.69-141.52,49.36-54.04,6.75-100.85-2.71-139.16-28.09-63.88-42.36-98.86-126.06-103.92-248.76-1.95-47.08-.87-94.99.18-141.34,1.39-62.33,2.84-126.77-3.06-189.82-8.49-90.51-37.82-215.14-129.2-294.72-80.11-69.79-202.7-95.95-328.23-69.98-107.05,22.15-203.24,74.26-314.73,145.68l-1.38-2.17c111.72-71.57,208.15-123.8,315.6-146.03,126.13-26.14,249.72.24,330.42,70.55C216.48-25.21,245.96,100.07,254.51,191.07c5.93,63.18,4.49,127.7,3.09,190.11-1.03,46.3-2.12,94.18-.16,141.15,5.05,121.84,39.62,204.86,102.78,246.73,69.03,45.76,172.95,37.77,278.01-21.35,69.69-39.21,132.72-91.16,193.7-141.38,16.59-13.69,33.77-27.84,50.82-41.48,73.68-59.1,162.64-123.23,263.89-150.86,108.02-29.45,218.93-9.41,289.45,52.31,51.06,44.7,81.02,108.28,109.97,169.78l5.21,11.06c30.62,64.74,65.48,131.29,125.1,171.1,57.5,38.4,148.49,41.39,192.3-15.34l2.02,1.57c-17.69,22.88-42.87,36.25-70.44,41.67h-.02Z" style="fill: #1d5395; stroke-width: 0px;"/>
                <path d="M1776.02,846.32c-41.71,8.15-88.48-1.98-123.22-24.04-59.87-38.02-95.79-101.93-127.47-164.1-2.08-4.06-4.13-8.12-6.19-12.2-24.64-48.61-50.11-98.89-86.93-139-7.43-8.08-15.2-15.64-23.1-22.42-70.11-60.2-175.51-81-281.9-55.62-92.26,21.99-171.35,73.07-229.97,115.12-8.3,5.95-16.78,12.15-25.93,18.98-16.88,12.59-33.86,25.65-50.29,38.26-58.41,44.88-118.82,91.26-185.47,125.72-49.03,25.33-173.55,77.06-270.36,10.35-7.02-4.85-13.8-10.25-20.12-16.1-49.12-45.42-77.66-122.25-84.87-228.34-3.02-44.61-3.43-89.89-3.81-133.66-.54-61.53-1.11-125.13-9.02-187.03-10.24-80.37-32.9-149.19-67.31-204.57-18.88-30.38-41.4-56.57-66.95-77.8-79.88-66.43-201.22-90.97-324.64-65.49-105.59,21.76-200.92,72.25-311.6,141.39l-1.35-2.18c110.91-69.29,206.48-119.91,312.45-141.74,124.04-25.63,246.3-.9,326.77,66.02,25.75,21.43,48.46,47.81,67.49,78.43,34.63,55.68,57.39,124.87,67.69,205.6,7.92,62.06,8.48,125.74,9.03,187.34.38,43.74.78,88.97,3.81,133.5,7.15,105.39,35.45,181.63,84.04,226.61,6.23,5.77,12.9,11.1,19.82,15.87,95.68,65.94,219.14,14.62,267.76-10.52,66.46-34.35,126.78-80.68,185.09-125.49,16.44-12.61,33.41-25.66,50.31-38.29,9.17-6.83,17.65-13.06,25.97-19.01,58.8-42.17,138.17-93.44,230.85-115.53,49.66-11.83,101.3-13.65,149.34-5.21,52.07,9.12,98.68,30.36,134.8,61.37,7.97,6.84,15.83,14.47,23.29,22.62,37.02,40.38,62.61,90.8,87.33,139.57,2.06,4.09,4.14,8.14,6.19,12.2,31.52,61.88,67.25,125.44,126.55,163.1,56.45,35.88,145.24,39.77,190.27-16.46l1.98,1.64c-18.13,22.63-43.18,35.74-70.38,41.05l.06.07Z" style="fill: #1d5395; stroke-width: 0px;"/>
                <path d="M1751.4,846.19c-6.37,1.24-12.94,2.08-19.67,2.53-34.68,2.23-71.53-6.71-101.1-24.51-59.59-35.87-96.36-96.78-128.93-156.07-2.44-4.46-4.89-8.94-7.34-13.45-25.13-46.02-51.1-93.6-87.49-132.01-7.43-7.84-15.18-15.17-23.03-21.78-68.68-57.77-170.95-80.13-274.05-59.99-.88.17-1.75.34-2.66.52-90.07,18.23-166.88,63.56-223.73,100.99-7.99,5.26-16.19,10.78-25.08,16.87-16.64,11.41-33.33,23.26-49.47,34.68-55.84,39.58-113.61,80.47-177.19,110.17-47.21,22.03-167.07,66.09-260.05-.56-6.78-4.87-13.37-10.3-19.53-16.13-48.13-45.67-76.42-118.92-86.5-223.95-3.99-41.96-5.78-84.39-7.51-125.4-2.58-60.92-5.24-123.9-15.24-184.85-12.66-77.3-36.85-143.22-71.89-195.91-19.29-28.99-41.96-53.91-67.44-74.11-79.68-63.08-199.75-86-321.05-60.99-104.11,21.37-198.6,70.25-308.47,137.13l-1.31-2.21c110.08-67,204.8-116.01,309.27-137.44,57.41-11.72,116.3-13.14,170.27-3.97,59.36,10.11,110.78,32.12,152.87,65.45,25.7,20.36,48.56,45.48,67.99,74.68,35.26,52.99,59.58,119.24,72.29,196.93,10.02,61.1,12.68,124.18,15.25,185.16,1.72,40.98,3.53,83.36,7.51,125.27,10,104.39,38.04,177.11,85.72,222.32,6.07,5.77,12.56,11.12,19.28,15.92,91.89,65.86,210.67,22.15,257.51.32,63.37-29.6,121.02-70.45,176.79-109.96,16.14-11.45,32.85-23.27,49.51-34.72,8.9-6.1,17.12-11.64,25.1-16.9,57.05-37.58,134.13-83.04,224.62-101.35,104.77-21.18,208.98,1.22,278.84,60,7.94,6.67,15.75,14.06,23.25,21.97,36.62,38.65,62.67,86.4,87.86,132.57,2.45,4.48,4.89,8.97,7.33,13.43,32.37,58.99,68.95,119.56,128.02,155.12,55.66,33.54,143.44,36.34,188.21-17.56l1.96,1.67c-17.09,20.59-41.74,34.46-70.71,40.12h-.02Z" style="fill: #1d5395; stroke-width: 0px;"/>
                <path d="M1727.54,846.02c-40.23,7.86-84.93-.52-119.05-19.95-59.37-33.76-96.97-91.65-130.4-148.04-2.89-4.9-5.81-9.81-8.71-14.76-25.54-43.39-51.93-88.27-87.83-124.96-7.41-7.61-15.15-14.71-22.96-21.16-68.39-56.39-169.9-80.05-271.51-63.32-87.78,14.45-162.34,54.01-217.5,86.83-7.72,4.61-15.64,9.43-24.22,14.76-16.29,10.14-32.6,20.65-48.37,30.79-53.38,34.37-108.58,69.91-169.19,94.93-42.47,17.49-85.68,26.87-124.98,27.12-48.08.31-90.04-12.67-124.73-38.58-6.58-4.91-12.96-10.36-18.97-16.19-46.46-45.23-75.28-117.04-88.13-219.56-4.86-39.06-7.91-78.39-10.86-116.45-4.92-63.35-9.55-123.19-21.82-183.38C223.25,59.89,197.51-3.13,161.82-53.14c-19.67-27.58-42.52-51.26-67.92-70.39-79.67-59.9-193.59-80.72-313.1-57.37-1.45.28-2.91.57-4.36.85-114.09,23.29-217.44,80.78-305.34,132.84l-1.28-2.22c88.09-52.15,191.62-109.76,306.11-133.15,121.87-24.89,238.28-4.11,319.5,56.96,25.62,19.28,48.66,43.15,68.48,70.96,35.89,50.32,61.76,113.65,76.92,188.23,12.27,60.34,17.14,123.05,21.85,183.68,2.95,38.01,6.01,77.31,10.84,116.32,12.78,101.9,41.36,173.23,87.37,218.03,5.91,5.75,12.22,11.13,18.72,15.98,88.07,65.74,202.24,29.71,247.23,11.15,60.39-24.92,115.48-60.42,168.76-94.71,15.79-10.17,32.11-20.66,48.41-30.83,8.58-5.32,16.51-10.18,24.27-14.77,55.34-32.97,130.19-72.64,218.4-87.17,102.32-16.84,204.57,7.02,273.54,63.87,7.88,6.49,15.68,13.68,23.18,21.33,36.12,36.91,62.6,81.93,88.21,125.46,2.9,4.95,5.79,9.87,8.7,14.73,33.25,56.11,70.63,113.67,129.45,147.12,56.07,31.91,141.05,33.63,186.18-18.68l1.94,1.7c-18.45,21.38-43.38,33.91-70.3,39.17l-.02.06Z" style="fill: #1d5395; stroke-width: 0px;"/>
                <path d="M1702.8,845.98c-5.82,1.14-11.82,1.97-17.94,2.46-33.4,2.67-69.31-4.78-98.55-20.41-59.2-31.64-97.59-86.51-131.85-140.01-3.45-5.36-6.88-10.78-10.34-16.22-25.86-40.73-52.61-82.86-87.93-117.75-7.45-7.37-15.17-14.28-22.89-20.52-67.5-54.46-167.05-79.56-266.32-67.17-85.41,10.65-157.78,44.45-211.29,72.7-7.54,3.97-15.19,8.11-23.38,12.63-15.82,8.76-31.61,17.81-46.89,26.59-53.39,30.64-103.8,59.6-161.57,80.03-54.12,19.08-157.22,41.53-239.4-22.37-6.38-4.95-12.58-10.4-18.4-16.22-45.36-45.34-73.87-113.72-89.76-215.17-5.57-35.85-9.71-71.81-13.71-106.6-7.3-63.28-14.18-123.07-28.88-182.76-17.49-71.13-44.77-131.25-81.08-178.6-20.05-26.17-43.07-48.6-68.44-66.69C3.77-187.35-110.65-206.32-229.66-182.12c-112.44,22.83-214.94,78.33-302.18,128.55l-1.26-2.25c87.43-50.32,190.12-105.92,302.96-128.84,119.82-24.33,234.86-5.23,315.84,52.43,25.57,18.21,48.76,40.85,68.98,67.22,36.52,47.65,63.97,108.07,81.52,179.56,14.75,59.86,21.63,119.7,28.94,183.09,4.01,34.76,8.15,70.73,13.69,106.5,15.78,100.89,44.07,168.82,89.02,213.74,5.76,5.75,11.86,11.12,18.16,16.04,81.23,63.17,183.35,40.91,237.01,21.97,57.55-20.35,107.89-49.25,161.17-79.82,15.27-8.78,31.09-17.83,46.91-26.6,8.2-4.54,15.87-8.66,23.42-12.66,53.7-28.34,126.33-62.25,212.17-72.98,99.93-12.49,200.2,12.83,268.22,67.72,7.81,6.3,15.57,13.26,23.11,20.69,35.52,35.09,62.34,77.33,88.28,118.21,3.46,5.44,6.89,10.83,10.34,16.22,34.07,53.19,72.23,107.77,130.9,139.12,54.51,29.17,137.56,32.13,184.14-19.81l1.89,1.73c-17.44,19.45-42.12,32.75-70.74,38.34v-.08Z" style="fill: #1d5395; stroke-width: 0px;"/>
                <path d="M1679.15,845.77c-39.35,7.69-82.34.5-114.96-15.84-59.08-29.54-99.79-83.61-133.31-131.98-4.06-5.87-8.14-11.82-12.25-17.79-26.1-38.06-53.07-77.39-87.72-110.44-7.48-7.15-15.16-13.84-22.85-19.9-66.55-52.52-164.17-79.07-261.13-71.02-82.89,6.88-153.13,34.91-205.08,58.58-7.22,3.3-14.6,6.74-22.51,10.51-15.15,7.26-30.24,14.78-44.82,22.04-51.1,25.47-99.39,49.53-154.54,65.42-51.89,14.89-150.63,30.35-229.06-33.29-6.15-4.97-12.15-10.46-17.84-16.28-57.23-58.83-79.57-148.47-91.36-210.79-6.05-32.23-11.04-64.52-15.89-95.73-9.86-63.62-19.17-123.73-36.61-183.19-19.89-68.04-48.72-125.23-85.66-169.96-20.43-24.78-43.63-45.95-68.92-62.98C-5.56-190.7-118.76-208.06-235.66-184.36c-110.8,22.41-212.44,75.9-299.05,124.27l-1.24-2.25c86.77-48.48,188.62-102.09,299.78-124.54,117.72-23.74,231.45-6.34,312.22,47.89,25.5,17.15,48.86,38.52,69.46,63.47,37.16,45.01,66.15,102.5,86.15,170.86,17.49,59.64,26.82,119.82,36.7,183.54,4.84,31.19,9.82,63.44,15.87,95.65,11.76,61.99,33.92,151.14,90.69,209.48,5.6,5.76,11.53,11.16,17.62,16.06,77.54,62.92,175.37,47.58,226.76,32.82,54.93-15.83,103.09-39.83,154.1-65.26,14.6-7.29,29.69-14.81,44.86-22.07,7.93-3.78,15.31-7.24,22.56-10.52,52.14-23.73,122.65-51.87,205.92-58.79,97.57-8.12,195.86,18.64,262.9,71.56,7.75,6.12,15.49,12.85,23.03,20.04,34.85,33.22,61.89,72.7,88.06,110.84,4.08,5.95,8.16,11.9,12.22,17.77,33.36,48.11,73.83,101.86,132.36,131.14,53.71,26.89,135.76,28.71,182.08-20.93l1.85,1.77c-18.94,20.29-43.71,32.14-70.11,37.3v.03Z" style="fill: #1d5395; stroke-width: 0px;"/>
                <path d="M1654.58,845.9c-38.33,7.49-79.91,1.12-112.54-14.08-59.02-27.45-100.5-78.36-134.78-123.92-4.85-6.43-9.68-12.94-14.53-19.5-26.2-35.33-53.31-71.85-87.15-102.99-7.48-6.89-15.15-13.37-22.78-19.28-66.56-51.34-159.85-78.63-255.94-74.87-80.15,3.11-148.38,25.39-198.87,44.45-6.89,2.61-13.98,5.36-21.66,8.41-14.26,5.67-28.42,11.56-42.1,17.26-49.06,20.4-95.4,39.67-148.19,51.08-60.65,12.98-147.8,15.91-218.73-44.21-5.93-5.01-11.74-10.49-17.25-16.32-54.21-57.32-78.18-140.42-92.99-206.4-6.26-28.15-11.81-56.28-17.18-83.51-12.7-64.46-24.71-125.35-45.24-184.97-22.3-64.89-52.65-119.15-90.25-161.32-20.81-23.37-44.17-43.32-69.41-59.28-79.26-50.01-189.82-65.84-303.72-43.59-1,.2-1.98.39-2.98.58-109.12,21.95-209.95,73.44-295.91,120l-1.22-2.28c86.1-46.64,187.15-98.23,296.62-120.25,1-.2,2.01-.39,2.98-.58,114.55-22.38,225.77-6.42,305.56,43.94,25.45,16.08,48.99,36.18,69.96,59.73,37.83,42.41,68.37,96.97,90.75,162.19,20.59,59.79,32.62,120.76,45.34,185.32,5.37,27.2,10.92,55.3,17.17,83.43,14.75,65.66,38.56,148.34,92.34,205.19,5.45,5.76,11.19,11.17,17.06,16.12,70.15,59.45,156.45,56.58,216.57,43.66,52.53-11.37,98.78-30.59,147.74-50.94,13.7-5.7,27.87-11.59,42.12-17.26,7.71-3.06,14.8-5.81,21.71-8.42,50.66-19.11,119.16-41.47,199.67-44.6,96.69-3.77,190.58,23.69,257.6,75.38,7.69,5.95,15.42,12.47,22.96,19.4,34.04,31.31,61.19,67.95,87.48,103.35,4.84,6.54,9.68,13.05,14.53,19.47,34.07,45.32,75.35,95.95,133.82,123.14,54.23,25.29,133.5,25.84,180.05-22.03l1.83,1.8c-19.29,19.83-44.1,31.51-70.42,36.65l-.02.06Z" style="fill: #1d5395; stroke-width: 0px;"/>
                <path d="M1630.32,845.54c-37.72,7.37-78.47,1.94-110.43-11.84-59.01-25.38-101.27-73.12-136.23-115.9-5.77-7.04-11.51-14.18-17.28-21.38-26.16-32.56-53.21-66.2-86.11-95.37-7.49-6.65-15.11-12.9-22.71-18.64-65.5-49.34-156.9-78.02-250.78-78.71-77.14-.6-143.49,15.88-192.69,30.3-7.04,2.06-13.97,4.17-20.82,6.27-12.98,4.03-25.86,8.23-38.32,12.29-47.36,15.42-92.08,29.99-142.87,36.92-83.02,11.18-155.07-7.9-208.36-55.1-5.7-5.03-11.33-10.54-16.68-16.35-51.72-56.28-77.73-137.54-94.62-202.02-6.08-23.46-11.75-46.9-17.21-69.56-15.92-65.95-30.99-128.24-55.12-188.47C195.42-3.74,163.52-55.1,125.27-94.67c-21.19-21.95-44.72-40.64-69.92-55.56-79.12-46.73-188.59-60.88-300.66-38.99-.83.16-1.63.32-2.46.48-107.44,21.49-207.45,71.01-292.78,115.72l-1.17-2.29c85.47-44.79,185.67-94.4,293.47-115.96,113.56-22.69,224.68-8.57,304.91,38.81,25.38,15.04,49.09,33.88,70.44,55.98C165.59-56.66,197.7-5.03,222.49,57.02c24.19,60.4,39.27,122.77,55.24,188.82,5.46,22.66,11.12,46.08,17.2,69.51,16.81,64.18,42.66,145.05,94.02,200.9,5.31,5.73,10.86,11.19,16.49,16.18,66.6,59.02,148.98,62.22,206.35,54.5,50.53-6.91,95.18-21.43,142.42-36.8,12.46-4.06,25.33-8.26,38.34-12.29,6.85-2.13,13.81-4.22,20.84-6.3,49.36-14.48,115.94-31,193.42-30.41,94.4.69,186.35,29.58,252.28,79.23,7.66,5.77,15.35,12.1,22.87,18.76,33.06,29.32,60.2,63.05,86.4,95.68,5.77,7.19,11.51,14.34,17.28,21.38,34.78,42.53,76.79,90.03,135.26,115.17,53.41,23.01,131.71,22.46,178.01-23.15l1.79,1.86c-19.34,19.03-44.13,30.38-70.37,35.51h0Z" style="fill: #1d5395; stroke-width: 0px;"/>
                <path d="M1605.9,845.67c-37.62,7.35-77.51,2.07-108.16-10.05-59.11-23.31-102.06-67.89-137.7-107.84-6.86-7.72-13.86-15.72-20.62-23.46-25.93-29.74-52.73-60.47-84.51-87.57-7.49-6.39-15.11-12.46-22.67-18.01-64.35-47.28-153.86-77.38-245.59-82.59-73.19-4.15-135.35,5.84-186.5,16.17-6.76,1.37-13.44,2.76-19.98,4.17-11.21,2.43-22.18,4.91-32.99,7.36-46.18,10.47-89.79,20.35-139.06,22.71-80.26,3.63-146.88-18.58-197.99-66-5.5-5.07-10.93-10.6-16.12-16.41-48.82-54.72-76.04-130.6-96.22-197.61-5.38-18.01-10.57-36-15.57-53.4-19.67-68.29-38.26-132.81-66.69-194.16-27.03-58.53-60.48-106.99-99.41-144.01-21.57-20.54-45.28-37.98-70.41-51.87-78.98-43.42-187.37-55.92-297.61-34.38-.65.13-1.28.25-1.91.37-105.76,21.03-204.96,68.55-289.63,111.43l-1.14-2.3c84.83-42.96,184.2-90.54,290.29-111.66.63-.12,1.28-.25,1.93-.38,110.82-21.65,219.82-9.06,299.33,34.65,25.33,13.98,49.19,31.55,70.95,52.24,39.18,37.26,72.81,85.97,99.98,144.79,28.5,61.55,47.12,126.14,66.82,194.53,5,17.4,10.19,35.39,15.56,53.37,20.1,66.74,47.2,142.27,95.67,196.64,5.13,5.74,10.52,11.2,15.96,16.23,50.61,46.94,116.58,68.91,196.15,65.34,49.06-2.34,92.58-12.18,138.63-22.65,10.84-2.46,21.81-4.94,33.04-7.37,6.57-1.41,13.22-2.82,20-4.17,51.35-10.37,113.68-20.4,187.14-16.22,92.2,5.22,182.21,35.51,246.96,83.08,7.6,5.6,15.27,11.69,22.8,18.12,31.92,27.21,58.79,58.02,84.79,87.83,6.76,7.74,13.73,15.74,20.59,23.43,35.42,39.75,78.14,84.06,136.71,107.17,50.96,20.15,127.76,21.16,175.98-24.25l1.74,1.89c-19.96,18.78-44.69,29.78-70.5,34.83h-.02Z" style="fill: #1d5395; stroke-width: 0px;"/>
                <path d="M1581.48,845.37c-36.95,7.22-75.92,2.92-105.86-7.85-53.33-19.09-94.19-53.71-139.15-99.81-8.22-8.45-16.6-17.26-24.71-25.81-25.46-26.84-51.76-54.59-82.15-79.47-7.53-6.17-15.12-12.01-22.6-17.37-86.36-61.85-187.71-80.72-240.43-86.46-68.53-7.48-127.17-3.42-180.32,2.02-6.48.66-12.87,1.36-19.13,2.06-8.45.97-16.74,1.93-24.9,2.9-45.92,5.45-89.3,10.57-138.06,8.02-77.43-4.27-138.79-29.43-187.6-76.91-5.27-5.11-10.52-10.65-15.56-16.44-48.18-55.69-75.77-128.92-97.85-193.22-3.92-11.49-7.75-22.9-11.55-34.2-24.15-71.83-46.93-139.67-80.62-202.91-29.36-55.32-64.36-100.88-104-135.37-21.95-19.13-45.81-35.33-70.92-48.15-79.99-40.7-184.56-51.28-294.55-29.79-.48.09-.93.18-1.4.27-104.08,20.6-202.47,66.1-286.5,107.14l-1.12-2.33c84.2-41.13,182.75-86.71,287.13-107.37.48-.09.95-.19,1.4-.27,110.54-21.6,215.67-10.95,296.18,30.02,25.28,12.91,49.32,29.24,71.42,48.49,39.89,34.71,75.07,80.52,104.58,136.12,33.77,63.44,56.6,131.38,80.77,203.31,3.81,11.31,7.63,22.71,11.55,34.2,22.01,64.06,49.47,137.02,97.34,192.35,5,5.74,10.16,11.22,15.4,16.29,48.37,47.04,109.18,71.96,185.98,76.17,48.54,2.54,91.82-2.58,137.62-8.01,8.19-.97,16.48-1.96,24.93-2.9,6.26-.7,12.66-1.4,19.13-2.06,53.3-5.48,112.1-9.54,180.87-2.03,52.96,5.77,154.78,24.7,241.61,86.91,7.54,5.4,15.16,11.27,22.75,17.47,30.51,24.99,56.88,52.81,82.37,79.69,8.08,8.53,16.46,17.36,24.68,25.79,44.7,45.84,85.31,80.25,138.17,99.19,50.16,18.02,126,17.78,173.97-25.38l1.7,1.93c-20.05,18.04-44.87,28.69-70.66,33.73l.08.04Z" style="fill: #1d5395; stroke-width: 0px;"/>
                <path d="M1556.57,845.54c-35.69,6.97-73.15,3.56-103.11-6.13-56.73-18.24-101.1-54.88-140.6-91.76-9.91-9.25-19.56-18.6-29.78-28.49-24.62-23.85-50.1-48.51-78.82-71.07-7.53-5.93-15.12-11.56-22.53-16.76-84.36-58.86-183.61-81.83-235.24-90.31-65.11-10.69-121.74-11.86-174.16-12.12-6.22-.02-12.31-.04-18.3-.07h-11.47c-49.59.04-92.41.06-142.42-8.21-46.92-7.9-116.31-25.6-177.2-87.78-5.07-5.13-10.08-10.68-14.97-16.48-44.88-53.55-73.73-122.65-99.45-188.81l-4.18-10.84C274.7,139.69,246.73,66.93,206.45.9c-31.67-52.06-68.2-94.72-108.61-126.73-22.33-17.71-46.34-32.68-71.4-44.46-79.87-37.37-183.42-46.3-291.63-25.16l-.75.15c-102.37,20.13-199.94,63.66-283.36,102.88l-1.07-2.34c83.57-39.27,181.3-82.88,283.95-103.07,109.07-21.41,213.4-12.48,293.93,25.21,25.24,11.87,49.45,26.93,71.91,44.78C140.05-95.61,176.79-52.76,208.62-.41c40.4,66.24,68.41,139.1,98.1,216.25l4.18,10.84c25.63,65.97,54.38,134.83,99.02,188.08,4.85,5.75,9.83,11.23,14.84,16.34,60.37,61.65,129.24,79.2,175.82,87.06,49.79,8.23,92.51,8.2,142,8.19h11.47c5.98,0,12.07.02,18.3.07,52.53.26,109.29,1.43,174.56,12.15,51.85,8.51,151.5,31.59,236.28,90.73,7.45,5.21,15.08,10.86,22.65,16.84,28.81,22.64,54.33,47.35,79.01,71.24,10.19,9.87,19.83,19.2,29.74,28.45,39.28,36.69,83.38,73.12,139.63,91.21,51.01,16.47,123.94,14.66,171.93-26.51l1.65,1.96c-20.48,17.55-45.41,28.06-71.25,33.11l.02-.06Z" style="fill: #1d5395; stroke-width: 0px;"/>
                <path d="M1530.83,845.84c-31.66,6.19-66.38,4.94-99.5-4.53-57.13-16.24-102.03-49.84-142.05-83.73-12.01-10.17-23.71-20.57-36.09-31.56-23.41-20.78-47.6-42.26-74.22-62.26-7.54-5.69-15.11-11.12-22.49-16.11-77.87-52.83-168.11-80.37-230.08-94.17-57.92-12.91-108.24-19.02-152.62-24.39-5.22-.63-10.36-1.26-15.42-1.87-5.94-.73-11.75-1.46-17.43-2.19-51.1-6.4-94.19-12.49-144.76-27.37-48.26-14.35-110.84-38.56-166.8-98.64-4.84-5.17-9.68-10.74-14.4-16.53-44.44-54.77-74.38-123.33-100.81-183.85l-.24-.58c-34.77-80.31-67.21-151.98-111.98-216.21-33.9-48.79-72-88.52-113.19-118.09-22.68-16.31-46.87-30.01-71.92-40.76-79.76-34.03-182.31-41.32-288.79-20.52-100.66,19.67-197.42,61.2-280.23,98.59l-1.05-2.34c82.93-37.44,179.88-79.04,280.8-98.75,106.98-20.9,210.07-13.56,290.28,20.67,25.22,10.82,49.58,24.62,72.39,41.04,41.43,29.73,79.73,69.68,113.81,118.73,44.88,64.42,77.38,136.24,112.23,216.66l.24.58c26.37,60.34,56.23,128.74,100.43,183.24,4.69,5.75,9.49,11.27,14.3,16.4,55.54,59.63,117.69,83.66,165.66,97.94,50.38,14.81,93.38,20.87,144.35,27.26,5.7.72,11.49,1.46,17.43,2.19,5.03.62,10.17,1.24,15.39,1.88,44.44,5.39,94.8,11.48,152.86,24.45,62.18,13.86,152.75,41.5,230.95,94.55,7.41,5.04,15.01,10.48,22.58,16.19,26.7,20.06,50.93,41.58,74.37,62.38,12.38,10.97,24.04,21.34,36.05,31.52,39.8,33.7,84.43,67.11,141.1,83.24,61.24,17.49,127.92,6.64,169.92-27.63l1.61,2c-19.83,16.19-45.1,27.24-72.69,32.63l.02-.06Z" style="fill: #1d5395; stroke-width: 0px;"/>
                <path d="M1505.97,845.71c-30.93,6.04-64.67,5.47-96.77-2.49-57.79-14.25-104.96-46.25-143.5-75.68-14.71-11.22-29.01-22.84-44.14-35.16-21.59-17.54-43.9-35.71-67.9-52.91-7.72-5.55-15.07-10.63-22.42-15.49-60.16-39.67-135.84-72.66-224.92-98.07-41.74-11.93-79.84-20.89-113.44-28.79-17.1-4.03-33.28-7.83-48.45-11.67-5.66-1.44-11.18-2.86-16.59-4.32-53.63-14.14-92.93-27.62-135.66-46.5-51.1-22.78-105.4-51.83-156.37-109.47-4.61-5.19-9.27-10.76-13.84-16.56-39.69-50.6-69.52-111.95-95.87-166.07-2.28-4.7-4.55-9.35-6.78-13.95-39.15-80.79-74.89-146.7-121.87-205.78-36.08-45.48-75.72-82.31-117.81-109.47-23.03-14.87-47.39-27.33-72.43-37.04-79.42-30.63-180.7-36.31-285.22-16.01l-.8.16c-98.63,19.27-194.31,58.7-276.3,94.15l-1-2.38c82.1-35.52,177.95-74.98,276.81-94.3l.8-.16c104.98-20.38,206.77-14.65,286.63,16.13,25.2,9.75,49.71,22.31,72.89,37.29,42.32,27.3,82.16,64.33,118.41,110.03,47.14,59.25,82.93,125.31,122.16,206.24,2.23,4.6,4.5,9.25,6.78,13.95,26.27,54.01,56.05,115.21,95.57,165.61,4.54,5.76,9.16,11.28,13.74,16.45,50.64,57.28,104.68,86.18,155.5,108.85,42.59,18.82,81.78,32.27,135.27,46.36,5.4,1.44,10.93,2.88,16.56,4.3,15.14,3.84,31.29,7.64,48.39,11.65,33.63,7.92,71.76,16.88,113.55,28.82,89.32,25.47,165.23,58.57,225.63,98.38,7.39,4.88,14.75,9.95,22.51,15.55,24.04,17.28,46.4,35.45,68.03,53.02,15.13,12.3,29.42,23.91,44.07,35.1,38.33,29.26,85.23,61.1,142.55,75.23,60.17,14.91,126.09,3.64,167.89-28.73l1.56,2.03c-20.04,15.52-45.54,26.28-73.29,31.7h.05Z" style="fill: #1d5395; stroke-width: 0px;"/>
                <path d="M1480.87,845.92c-29.9,5.84-62.34,5.78-93.8-.81-58.43-12.18-106.06-41.02-144.95-67.65-18.16-12.41-35.85-25.57-54.6-39.52-18.99-14.11-38.58-28.71-59.21-42.82-7.76-5.34-15.06-10.18-22.38-14.84-57.53-36.8-129.43-70.16-219.76-101.94-22.2-7.82-42.95-14.84-63.03-21.65-35.1-11.89-65.41-22.16-92.72-32.99-5.4-2.12-10.68-4.29-15.74-6.43-43.59-18.21-80.26-37.21-126.54-65.63-39.59-24.47-93.79-58.01-145.97-120.3-4.41-5.23-8.86-10.82-13.27-16.6-34.58-45.69-62.08-96.99-88.66-146.64-5.27-9.84-10.45-19.54-15.59-28.98C277.65,52.12,238.26-6.28,192.9-56.22c-38.2-42.15-79.37-76.08-122.39-100.83-23.36-13.47-47.9-24.69-72.91-33.35-101.35-34.88-209.11-25.51-281.66-11.51-.63.12-1.25.24-1.88.37-96.43,18.84-187.27,54.62-272.09,89.65l-.98-2.38c85.49-35.32,177.06-71.4,274.46-90.17,72.85-14.05,181.1-23.47,282.95,11.6,25.18,8.7,49.86,20,73.37,33.55,43.26,24.89,84.64,58.96,123,101.31,45.49,50.1,85.01,108.66,132.13,195.84,5.14,9.47,10.33,19.17,15.62,29,26.53,49.55,53.96,100.76,88.43,146.29,4.38,5.73,8.8,11.3,13.18,16.51,51.91,61.99,105.93,95.38,145.34,119.76,46.16,28.34,82.72,47.31,126.19,65.46,5.06,2.13,10.34,4.28,15.71,6.41,27.24,10.8,57.53,21.05,92.6,32.94,20.08,6.81,40.85,13.83,63.05,21.65,90.52,31.85,162.57,65.29,220.28,102.21,7.32,4.69,14.65,9.55,22.44,14.91,20.63,14.14,40.28,28.75,59.27,42.89,18.71,13.91,36.37,27.07,54.51,39.46,38.67,26.46,86.01,55.15,144.04,67.25,60.04,12.6,123.61,1.15,165.88-29.86l1.49,2.1c-20.66,15.14-46.28,25.68-74.1,31.12l.02-.03Z" style="fill: #1d5395; stroke-width: 0px;"/>
                <path d="M1455.56,846.19c-28.83,5.63-59.92,6.06-90.62.83-59.59-10.12-109.53-37.16-146.39-59.6-22.78-13.85-44.98-28.99-68.5-45.02-15.2-10.37-30.9-21.05-47.01-31.58-7.85-5.13-15.17-9.79-22.31-14.23-70.42-43.65-147.7-77.51-214.6-105.83-55.56-23.53-108.03-45.75-149.6-68.84-5.06-2.82-10.09-5.69-14.9-8.56-45.1-26.6-81.28-55.28-117.42-84.79l-8.02-6.57c-36.61-29.96-82.19-67.23-127.53-124.53-4.18-5.25-8.43-10.85-12.68-16.63-28.88-39.56-53.97-82.64-78.21-124.32-9.51-16.36-18.5-31.8-27.64-46.89C283.02,31.17,238-27.57,188.44-75.28c-40.21-38.82-82.95-69.84-127-92.18-23.68-12.04-48.38-22.02-73.42-29.62-79.81-24.15-175.97-26.57-278.09-7.01-95.28,18.2-186.06,52.37-270.84,85.73l-.93-2.39c84.87-33.41,175.78-67.63,271.28-85.87,102.52-19.64,199.1-17.19,279.3,7.09,25.18,7.65,50.02,17.69,73.85,29.8,44.28,22.48,87.21,53.63,127.6,92.62,49.72,47.85,94.85,106.76,142.09,185.42,9.14,15.12,18.14,30.58,27.67,46.94,24.23,41.6,49.26,84.64,78.06,124.09,4.23,5.79,8.49,11.33,12.64,16.56,45.19,57.08,90.63,94.25,127.14,124.13l8.02,6.57c36.07,29.42,72.16,58.04,117.11,84.56,4.78,2.85,9.78,5.73,14.84,8.52,41.44,23.01,93.84,45.22,149.34,68.71,66.99,28.36,144.38,62.25,214.95,106,7.17,4.45,14.49,9.11,22.36,14.24,16.14,10.52,31.87,21.23,47.07,31.6,23.48,15.99,45.65,31.11,68.38,44.94,36.66,22.32,86.33,49.2,145.5,59.28,59.85,10.23,121.11-1.35,163.87-30.99l1.45,2.13c-21.33,14.77-47.17,25.12-75.12,30.58l-.02.03Z" style="fill: #1d5395; stroke-width: 0px;"/>
                <path d="M1429.82,846.31c-27.87,5.45-57.66,6.46-87.04,2.59-47.24-6.18-92.83-22.08-147.84-51.55-29.16-15.62-57.57-33.46-87.66-52.36-9.73-6.11-19.57-12.29-29.6-18.5-8.15-5.05-15.42-9.51-22.27-13.6-57.8-34.67-120.2-65.53-175.27-92.76-11.69-5.77-23.1-11.42-34.17-16.95-66.39-33.2-109.3-58.03-143.43-83.04-4.75-3.48-9.47-7.07-14.06-10.69-38.96-30.56-68.84-62.15-103.4-98.74l-4.9-5.19c-6.46-6.85-13.2-13.91-20.21-21.2-31.53-32.87-67.25-70.13-104.98-120.69-3.94-5.24-8.01-10.88-12.12-16.69-22.13-31.46-42.87-64.76-62.9-96.94-15.29-24.52-29.71-47.69-44.54-69.84C287.5,8.19,237.92-48.87,183.86-94.25c-42.12-35.48-86.41-63.58-131.59-83.55-23.98-10.62-48.85-19.33-73.94-25.93-79.36-20.72-174.29-21.57-274.52-2.51-93.54,17.75-183.5,50-267.7,81.47l-.88-2.43c84.3-31.51,174.49-63.78,268.12-81.58,100.59-19.13,195.91-18.25,275.62,2.56,25.22,6.62,50.2,15.39,74.33,26.06,45.41,20.08,89.9,48.3,132.2,83.92,54.24,45.55,103.99,102.8,152.06,174.99,14.86,22.19,29.3,45.39,44.58,69.91,20.03,32.18,40.74,65.44,62.83,96.82,4.1,5.79,8.16,11.37,12.08,16.62,37.65,50.42,73.31,87.63,104.78,120.44,7.02,7.32,13.75,14.35,20.22,21.22l4.9,5.19c34.52,36.52,64.3,68.03,103.11,98.48,4.56,3.6,9.25,7.17,14,10.63,34.01,24.93,76.8,49.7,143.05,82.83,11.05,5.53,22.48,11.17,34.14,16.95,55.1,27.24,117.56,58.14,175.45,92.88,6.84,4.1,14.12,8.55,22.29,13.6,10,6.18,19.85,12.37,29.6,18.5,30.07,18.88,58.45,36.7,87.52,52.28,54.69,29.32,100.04,45.14,146.96,51.27,58.7,7.75,119.2-4.26,161.86-32.1l1.38,2.17c-21.77,14.2-48.15,24.34-76.55,29.89l.05-.04Z" style="fill: #1d5395; stroke-width: 0px;"/>
                <path d="M1403.74,846.74c-26.57,5.19-54.81,6.67-83.09,4.05-47.48-4.32-94.91-18.15-149.27-43.52-38.36-17.89-75.73-39.78-115.34-62.96l-3.66-2.15c-7.32-4.29-14.73-8.62-22.2-12.96-35.28-20.43-71.58-40.22-106.69-59.35-34.58-18.84-67.25-36.63-97.58-54.28-59.77-34.78-103.38-65.69-137.23-97.27-4.5-4.19-8.94-8.49-13.22-12.8-33.18-33.34-59.06-68.52-86.43-105.75-4.19-5.72-8.44-11.48-12.76-17.3-11.84-16.04-24.77-32.78-38.5-50.49-22.91-29.57-48.87-63.09-76.31-102.19-3.68-5.24-7.46-10.7-11.55-16.72-13.32-19.71-26.56-40.04-39.38-59.72-22.64-34.79-46.05-70.78-69.67-102.68-49.53-67.21-102.33-120.87-161.44-164-43.92-32.13-89.76-57.33-136.19-74.9-24.26-9.2-49.3-16.67-74.45-22.21-78.86-17.27-172.55-16.58-270.95,1.99-91.55,17.28-180.92,47.61-264.57,77.18l-.86-2.43c83.76-29.59,173.28-59.9,264.94-77.28,98.73-18.66,192.76-19.34,271.97-1.98,25.25,5.57,50.41,13.09,74.8,22.32,46.66,17.66,92.7,42.97,136.8,75.23,59.32,43.3,112.32,97.13,162.02,164.54,23.65,31.95,47.1,67.97,69.77,102.79,12.8,19.68,26.03,40.01,39.35,59.7,4.09,6,7.84,11.46,11.52,16.68,27.43,39.06,53.36,72.55,76.24,102.1,13.72,17.72,26.69,34.48,38.53,50.54,4.32,5.82,8.57,11.61,12.76,17.3,27.33,37.16,53.12,72.26,86.2,105.46,4.25,4.29,8.69,8.59,13.13,12.74,33.73,31.45,77.18,62.25,136.78,96.94,30.29,17.6,62.93,35.4,97.52,54.24,35.13,19.12,71.46,38.91,106.75,59.39,7.46,4.34,14.87,8.67,22.2,12.96l3.66,2.15c39.54,23.14,76.89,45.01,115.11,62.85,54.09,25.24,101.25,38.99,148.44,43.29,58.35,5.37,116.61-6.75,159.85-33.23l1.33,2.21c-22.74,13.92-49.56,23.91-78.33,29.53h0Z" style="fill: #1d5395; stroke-width: 0px;"/>
                <path d="M1376.83,847.19c-25.24,4.93-51.81,6.87-78.29,5.5-48.48-2.47-96.38-13.75-150.71-35.47-42.28-16.91-83.01-38.51-120.73-59.36-7.33-4.05-14.73-8.17-22.16-12.34l-10.66-5.95c-64.98-36.31-132.2-73.87-188.45-111.57-55.57-37.26-98.44-73.72-131.04-111.5-4.21-4.87-8.37-9.89-12.36-14.94-29.58-37.22-51.87-75.91-75.47-116.93-4.8-8.33-9.64-16.76-14.6-25.26-24.86-42.73-54.86-88.25-89.62-140.94l-14.85-22.53c-3.66-5.53-7.31-11.12-10.99-16.75-35.24-54.25-71.66-110.37-110.62-157.99-51.29-62.98-107.34-113.22-171.36-153.58-45.6-28.81-92.96-51.11-140.8-66.26-24.51-7.79-49.73-14.01-74.96-18.51-79.41-14.07-169.36-11.88-267.39,6.49-89.49,16.8-178.28,45.23-261.44,72.9l-.81-2.44c83.26-27.71,172.03-56.13,261.79-72.99,98.33-18.42,188.59-20.62,268.29-6.51,25.34,4.53,50.67,10.76,75.28,18.58,48.04,15.24,95.61,37.63,141.4,66.53,64.25,40.52,120.49,90.94,171.95,154.12,39.03,47.74,75.52,103.9,110.8,158.22,3.68,5.63,7.32,11.2,10.98,16.73l14.85,22.53c34.79,52.71,64.81,98.24,89.69,141.06,4.96,8.51,9.83,16.93,14.63,25.28,23.55,40.89,45.78,79.55,75.25,116.6,3.98,5.02,8.11,10.02,12.29,14.87,32.46,37.6,75.15,73.91,130.51,111.05,56.18,37.64,123.32,75.16,188.27,111.45l10.66,5.95c7.43,4.14,14.8,8.27,22.13,12.32,37.64,20.79,78.31,42.37,120.45,59.23,54.08,21.64,101.71,32.84,149.9,35.31,57.05,2.95,114.59-9.58,157.87-34.36l1.26,2.25c-23.57,13.5-51.34,23.42-80.94,29.2h-.02Z" style="fill: #1d5395; stroke-width: 0px;"/>
                <path d="M1349.24,847.99c-23.51,4.59-48.07,6.85-72.82,6.59-48.93-.49-98.71-9.46-152.16-27.44-37.27-12.51-76.19-29.56-122.49-53.61-6.99-3.62-14.22-7.46-22.08-11.7-80.06-43.11-143.51-82.82-193.95-121.42-52.09-39.88-94.08-82.18-124.82-125.71-3.92-5.53-7.78-11.29-11.52-17.07-27.01-41.84-46.47-85.05-67.1-130.79-4.56-10.11-9.14-20.26-13.83-30.5-25.7-56.06-56.5-113.07-94.16-174.26-3.44-5.58-6.9-11.17-10.42-16.79-39.5-63.45-76.2-113.69-112.22-153.58-52.45-58.32-113.44-106.49-181.24-143.14-47.16-25.54-96.1-44.93-145.41-57.61-24.7-6.36-50.08-11.35-75.47-14.79-78.7-10.61-167.45-6.92-263.81,11.01-87.48,16.25-172.13,41.74-258.31,68.61l-.76-2.45c86.27-26.91,170.97-52.41,258.61-68.69,96.62-17.96,185.65-21.68,264.62-11.01,25.47,3.45,50.96,8.47,75.74,14.86,49.54,12.74,98.65,32.2,145.98,57.84,68.07,36.81,129.27,85.15,181.92,143.69,36.12,40.01,72.93,90.39,112.5,153.95,3.52,5.61,6.99,11.23,10.43,16.81,37.73,61.27,68.57,118.38,94.32,174.54,4.72,10.23,9.3,20.42,13.86,30.52,20.58,45.64,40.01,88.78,66.91,130.46,3.7,5.76,7.56,11.47,11.45,16.98,30.59,43.32,72.39,85.42,124.3,125.16,50.32,38.52,113.65,78.18,193.6,121.2,7.86,4.24,15.09,8.05,22.05,11.68,46.18,24,84.99,40.96,122.12,53.45,53.2,17.88,102.71,26.82,151.38,27.31,56.47.6,111.83-12.01,155.86-35.49l1.19,2.29c-25.05,13.37-53.77,23.24-84.24,29.22v-.11Z" style="fill: #1d5395; stroke-width: 0px;"/>
                <path d="M1320.33,849.12c-21.36,4.17-43.5,6.66-66.05,7.34-50.17,1.59-100.41-4.77-153.59-19.42-40-11.01-80.63-26.64-124.22-47.84-7.23-3.52-14.65-7.24-22.04-11.08-71.97-37.23-137.25-80.55-188.77-125.32-49.71-43.21-89.61-90.3-118.6-139.92-3.61-6.2-7.21-12.66-10.65-19.18-24.93-47.16-41.94-95.6-59.97-146.89-3.9-11.13-7.84-22.33-11.87-33.54-25.32-70.63-51.96-129.42-83.85-185.06-3.21-5.62-6.5-11.23-9.83-16.82-34.3-57.61-72.6-107.8-113.8-149.18-54.5-54.87-118.81-99.53-191.15-132.73-48.6-22.35-99.08-38.81-150.02-48.97-24.85-4.96-50.4-8.69-75.96-11.1-77.79-7.22-165.35-1.98-260.25,15.51-85.17,15.7-169.31,39.38-255.18,64.32l-.71-2.49c85.95-24.96,170.16-48.65,255.43-64.4,95.12-17.53,182.92-22.77,260.94-15.55,25.66,2.39,51.29,6.15,76.22,11.12,51.13,10.2,101.79,26.76,150.58,49.17,72.6,33.33,137.16,78.15,191.88,133.24,41.35,41.53,79.77,91.91,114.18,149.68,3.37,5.62,6.63,11.25,9.87,16.87,31.96,55.76,58.68,114.69,84.06,185.47,4.03,11.24,7.96,22.41,11.87,33.57,17.98,51.19,34.98,99.56,59.8,146.55,3.43,6.5,7.01,12.94,10.6,19.09,28.84,49.39,68.56,96.23,118.06,139.27,51.36,44.64,116.47,87.86,188.27,125,7.36,3.81,14.76,7.54,21.98,11.04,43.45,21.12,83.94,36.73,123.8,47.69,52.96,14.57,102.93,20.89,152.84,19.33,55.68-1.72,108.88-14.4,153.84-36.62l1.12,2.3c-27.08,13.4-57.1,23.34-88.84,29.54Z" style="fill: #1d5395; stroke-width: 0px;"/>
                <path d="M1288.66,850.79c-18.52,3.62-37.44,6.16-56.52,7.55-50.75,3.72-102.92-.1-155.04-11.37-42.05-9.08-84.42-23.25-125.98-42.09-7.26-3.28-14.64-6.8-21.97-10.43-68.62-34.03-132.12-78.72-183.59-129.24-47.54-46.68-85.33-98.51-112.35-154.11-3.35-6.88-6.64-14.03-9.8-21.29-23.11-53.13-38.47-110.03-53.34-165.06-3.11-11.49-6.2-22.99-9.4-34.49-16.34-59.15-37.83-128.67-73.57-195.87-3.05-5.73-6.16-11.4-9.26-16.85-31.08-54.67-69.91-103.37-115.37-144.78-56.69-51.69-124.34-92.84-201.04-122.29-49.97-19.19-101.98-32.79-154.63-40.32-24.95-3.58-50.68-6.06-76.46-7.37-77.7-3.9-161.66,2.66-256.7,20.02-82.53,15.1-162.96,36.12-252.07,60.04l-.66-2.5c89.13-23.95,169.66-44.99,252.27-60.1,95.22-17.42,179.39-23.97,257.27-20.05,25.89,1.29,51.7,3.79,76.7,7.38,52.84,7.58,105.04,21.21,155.18,40.48,77,29.58,144.89,70.89,201.83,122.79,45.68,41.58,84.68,90.5,115.88,145.41,3.13,5.48,6.25,11.17,9.3,16.92,35.84,67.42,57.42,137.12,73.78,196.4,3.19,11.5,6.29,23.03,9.4,34.52,14.82,54.93,30.17,111.76,53.22,164.69,3.15,7.23,6.42,14.36,9.76,21.19,26.89,55.33,64.53,106.94,111.85,153.4,51.29,50.36,114.54,94.88,182.96,128.77,7.3,3.61,14.68,7.11,21.89,10.4,41.38,18.77,83.59,32.89,125.45,41.93,51.9,11.2,103.81,15.03,154.33,11.32,53.78-3.92,106.28-16.98,151.86-37.76l1.05,2.34c-29.66,13.51-62.25,23.79-96.21,30.43h0Z" style="fill: #1d5395; stroke-width: 0px;"/>
                <path d="M1252.8,853.76c-109.06,21.31-223.71,10.24-326.96-33.22-138.07-58.08-249.77-171.55-306.47-311.25-27.05-66.64-41.63-138.87-55.76-208.74-17.67-87.43-35.94-177.83-78.79-256.96C399.12-114.68,217.01-220.83-2.31-240.37c-196.75-17.5-391.09,30.37-579.04,76.7l-.61-2.51C-393.84-212.54-199.28-260.48-2.1-242.91c101.46,9.05,199.14,38.08,282.47,83.96,91.03,50.12,162.47,119.72,206.67,201.31,43.03,79.45,61.34,170.06,79.06,257.69,14.1,69.75,28.66,141.88,55.62,208.27,56.45,139.1,167.64,252.04,305.08,309.84,137.45,57.83,295.18,58.04,432.78.6l.98,2.38c-34.84,14.55-71.01,25.42-107.78,32.61h.03Z" style="fill: #1d5395; stroke-width: 0px;"/>
            </g>
            </g>
        </g>
        </g>
    </g>
    </svg>
</section>

<section class="page_content">
    <div class="container-fluid">
        <?php the_content(); ?>
    </div>
</section>
<?php get_footer();?>