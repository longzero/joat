<?php
	if (have_rows('social_network')) {
	?>

	<section class="listing-cards listing-cards--social">

		<?php
			while (have_rows('social_network')) {
				the_row();
				$icon = get_sub_field('icon');
				$statistics = get_sub_field('statistics');
				$username = get_sub_field('username');
				$network = get_sub_field('network');

				$network_url = "//".$network.".com/".$username;
				if ($network == "linkedin") $network_url = "//".$network.".com/in/".$username;
				else if ($network == "blog") $network_url = $username;
				?>

				<a class="fade-up location-card location-card--social" target="_blank" href="<?= $network_url ?>">
					<span class="location-icon location-icon--social">
						<?php if ($icon) { ?>
							<img class="location-icon-image location-icon-image--social <?= $network ?>" src="<?= $icon ?>">
						<?php } else { ?>
							<?php if ($network == 'facebook') { ?>
								<svg viewBox="0 0 266.893 266.895" xmlns="http://www.w3.org/2000/svg" width="266.893" height="266.895"><path fill="#3C5A99" d="M248.082 262.307c7.854 0 14.223-6.369 14.223-14.225V18.812c0-7.857-6.368-14.224-14.223-14.224H18.812c-7.857 0-14.224 6.367-14.224 14.224v229.27c0 7.855 6.366 14.225 14.224 14.225h229.27z"/><path fill="#FFF" d="M182.409 262.307v-99.803h33.499l5.016-38.895h-38.515V98.777c0-11.261 3.127-18.935 19.275-18.935l20.596-.009V45.045c-3.562-.474-15.788-1.533-30.012-1.533-29.695 0-50.025 18.126-50.025 51.413v28.684h-33.585v38.895h33.585v99.803h40.166z"/></svg>
							<?php } else if ($network == 'instagram') { ?>
								<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"><g fill-rule="nonzero"><path d="M256 0c-69.526 0-78.244.295-105.549 1.541-27.248 1.243-45.858 5.57-62.142 11.899-16.834 6.542-31.111 15.296-45.342 29.528C28.735 57.199 19.981 71.476 13.439 88.31 7.11 104.593 2.783 123.203 1.54 150.451.294 177.756 0 186.474 0 256c0 69.524.294 78.242 1.54 105.547 1.243 27.248 5.57 45.858 11.899 62.141 6.542 16.834 15.296 31.111 29.528 45.344 14.231 14.231 28.508 22.985 45.342 29.527 16.284 6.328 34.894 10.656 62.142 11.899 27.305 1.245 36.023 1.54 105.549 1.54 69.524 0 78.242-.295 105.547-1.54 27.248-1.243 45.858-5.571 62.141-11.899 16.834-6.542 31.111-15.296 45.344-29.527 14.231-14.233 22.985-28.51 29.527-45.344 6.328-16.283 10.656-34.893 11.899-62.141 1.245-27.305 1.54-36.023 1.54-105.547 0-69.526-.295-78.244-1.54-105.549-1.243-27.248-5.571-45.858-11.899-62.141-6.542-16.834-15.296-31.111-29.527-45.342-14.233-14.232-28.51-22.986-45.344-29.528-16.283-6.329-34.893-10.656-62.141-11.899C334.242.295 325.524 0 256 0zm0 46.127c68.354 0 76.451.26 103.445 1.492 24.959 1.139 38.514 5.309 47.535 8.814 11.949 4.644 20.477 10.192 29.435 19.15 8.959 8.958 14.506 17.487 19.15 29.435 3.506 9.021 7.676 22.576 8.815 47.535 1.231 26.995 1.492 35.092 1.492 103.447 0 68.354-.261 76.451-1.492 103.445-1.139 24.959-5.309 38.514-8.815 47.535-4.644 11.949-10.191 20.477-19.15 29.435-8.958 8.959-17.486 14.506-29.435 19.15-9.021 3.506-22.576 7.676-47.535 8.814-26.99 1.232-35.086 1.493-103.445 1.493-68.361 0-76.455-.261-103.447-1.493-24.959-1.138-38.514-5.308-47.535-8.814-11.949-4.644-20.477-10.191-29.436-19.15-8.958-8.958-14.506-17.486-19.149-29.435-3.506-9.021-7.676-22.576-8.815-47.535-1.232-26.994-1.492-35.091-1.492-103.445 0-68.355.26-76.452 1.492-103.447 1.139-24.959 5.309-38.514 8.815-47.535 4.643-11.948 10.191-20.477 19.149-29.435 8.959-8.958 17.487-14.506 29.436-19.15 9.021-3.505 22.576-7.675 47.535-8.814 26.995-1.232 35.092-1.492 103.447-1.492z" fill="url(#_Linear1)"/><path d="M256 341.332c-47.129 0-85.334-38.205-85.334-85.332 0-47.129 38.205-85.334 85.334-85.334 47.127 0 85.332 38.205 85.332 85.334 0 47.127-38.205 85.332-85.332 85.332zm0-216.792c-72.604 0-131.46 58.856-131.46 131.46 0 72.602 58.856 131.458 131.46 131.458 72.602 0 131.458-58.856 131.458-131.458 0-72.604-58.856-131.46-131.458-131.46z" fill="url(#_Linear2)"/><path d="M423.372 119.346c0 16.967-13.754 30.72-30.72 30.72s-30.72-13.753-30.72-30.72c0-16.966 13.754-30.719 30.72-30.719s30.72 13.753 30.72 30.719z" fill="url(#_Linear3)"/></g><defs><linearGradient gradientTransform="scale(-516.448) rotate(-73.16 -.256 .419)" gradientUnits="userSpaceOnUse" id="_Linear1" x1="0" x2="1" y1="0" y2="0"><stop offset="0" stop-color="#515bd4"/><stop offset=".26" stop-color="#9510b8"/><stop offset=".66" stop-color="#e51804"/><stop offset="1" stop-color="#feda77"/></linearGradient><linearGradient gradientTransform="scale(-516.448) rotate(-73.16 -.256 .419)" gradientUnits="userSpaceOnUse" id="_Linear2" x1="0" x2="1" y1="0" y2="0"><stop offset="0" stop-color="#515bd4"/><stop offset=".26" stop-color="#9510b8"/><stop offset=".66" stop-color="#e51804"/><stop offset="1" stop-color="#ffbf00"/></linearGradient><linearGradient gradientTransform="scale(-516.448) rotate(-73.16 -.256 .419)" gradientUnits="userSpaceOnUse" id="_Linear3" x1="0" x2="1" y1="0" y2="0"><stop offset="0" stop-color="#515bd4"/><stop offset=".26" stop-color="#9510b8"/><stop offset=".66" stop-color="#e51804"/><stop offset="1" stop-color="#ffbf00"/></linearGradient></defs></svg>
							<?php } else if ($network == 'linkedin') { ?>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#0076b2" d="M0 0h512v512H0z"/><g data-name="Linkedin" fill="#fff"><path d="M116.3 207h59.47v191.16H116.3zm29.75-95a34.45 34.45 0 11-34.47 34.45A34.46 34.46 0 01146.05 112M213 207h57v26.14h.81c7.92-15 27.31-30.88 56.21-30.88 60.16 0 71.28 39.59 71.28 91.07v104.83h-59.4v-93c0-22.17-.38-50.69-30.87-50.69-30.92 0-35.63 24.16-35.63 49.1v94.55H213z"/></g></svg>
							<?php } else if ($network == 'pinterest') { ?>
								<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"><g fill-rule="nonzero"><path d="M511.999 256.002c0 141.373-114.606 255.979-255.98 255.979C114.646 511.981.04 397.375.04 256.002.04 114.628 114.646.022 256.019.022c141.374 0 255.98 114.606 255.98 255.98z" fill="#fff"/><path d="M255.998.001C114.614.001 0 114.618 0 255.999 0 364.455 67.475 457.17 162.707 494.47c-2.24-20.255-4.261-51.405.889-73.518 4.65-19.978 30.018-127.248 30.018-127.248s-7.659-15.334-7.659-38.008c0-35.596 20.632-62.171 46.323-62.171 21.839 0 32.391 16.399 32.391 36.061 0 21.966-13.984 54.803-21.203 85.235-6.03 25.482 12.779 46.261 37.909 46.261 45.503 0 80.477-47.976 80.477-117.229 0-61.293-44.045-104.149-106.932-104.149-72.841 0-115.597 54.634-115.597 111.095 0 22.004 8.475 45.596 19.052 58.421 2.09 2.535 2.398 4.758 1.776 7.343-1.945 8.087-6.262 25.474-7.111 29.032-1.117 4.686-3.711 5.681-8.561 3.424-31.974-14.884-51.963-61.627-51.963-99.174 0-80.755 58.672-154.915 169.148-154.915 88.806 0 157.821 63.279 157.821 147.85 0 88.229-55.629 159.232-132.842 159.232-25.94 0-50.328-13.476-58.674-29.394 0 0-12.838 48.878-15.95 60.856-5.782 22.237-21.382 50.109-31.818 67.11C204.156 508.001 229.61 512 255.998 512c141.389 0 256.003-114.612 256.003-256.001C512.001 114.618 397.387.001 255.998.001z" fill="#e71d27"/></g></svg>
							<?php } else if ($network == 'twitter') { ?>
								<svg viewBox="0 0 300 244.187" xmlns="http://www.w3.org/2000/svg" height="244.187" width="300"><path d="M94.719 243.187c112.46 0 173.956-93.168 173.956-173.956 0-2.647-.054-5.28-.173-7.903A124.323 124.323 0 00299 29.668c-10.955 4.87-22.744 8.147-35.11 9.625 12.623-7.569 22.314-19.543 26.885-33.817a122.61 122.61 0 01-38.824 14.84C240.794 8.433 224.911 1 207.322 1c-33.763 0-61.144 27.38-61.144 61.132 0 4.798.537 9.465 1.586 13.94C96.948 73.517 51.89 49.188 21.738 12.194a60.978 60.978 0 00-8.278 30.73c0 21.212 10.793 39.938 27.207 50.893a60.69 60.69 0 01-27.69-7.647c-.01.257-.01.507-.01.781 0 29.61 21.076 54.332 49.052 59.934a61.22 61.22 0 01-16.122 2.152c-3.934 0-7.766-.387-11.49-1.103C42.19 172.227 64.76 189.904 91.52 190.4c-20.925 16.402-47.287 26.17-75.937 26.17-4.929 0-9.798-.28-14.584-.846 27.059 17.344 59.19 27.464 93.722 27.464" fill="#1da1f2"/></svg>
							<?php } else if ($network == 'youtube') { ?>
								<svg viewBox="0 0 71.412 50" xmlns="http://www.w3.org/2000/svg" width="71.412" height="50"><style type="text/css" id="style3"></style><g id="g5" transform="scale(.58824)"><path d="M118.9 13.3c-1.4-5.2-5.5-9.3-10.7-10.7C98.7 0 60.7 0 60.7 0s-38 0-47.5 2.5C8.1 3.9 3.9 8.1 2.5 13.3 0 22.8 0 42.5 0 42.5s0 19.8 2.5 29.2C3.9 76.9 8 81 13.2 82.4 22.8 85 60.7 85 60.7 85s38 0 47.5-2.5c5.2-1.4 9.3-5.5 10.7-10.7 2.5-9.5 2.5-29.2 2.5-29.2s.1-19.8-2.5-29.3z" id="path7" fill="#E62117" fill-opacity="1"/><path id="polygon9" fill="#fff" d="M80.2 42.5L48.6 24.3v36.4z"/></g></svg>
							<?php } else { ?>
								<?php echo $network ?>
							<?php } ?>
						<?php } ?>
					</span>
					<span class="location-content">
						<span class="location-info-line location-info-line--statistics"><?= $statistics ?></span>
						<span class="location-info-line location-info-line--username"><?= $username ?></span>
					</span>
				</a>

				<?php
			}
		?>

	</section>

	<?php
	}
?>
