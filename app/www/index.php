<html>
<head>
	<title>Create ICS File</title>
	<link rel="stylesheet" href="style.css"/>
	<script type="text/javascript" src="script.js"></script>
	<script type="text/javascript"
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRlhCP1T5ZuvfVgGudUubXGLV7g95sEcQ&libraries=places"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="flex w-full h-full items-center flex flex-col mt-6 md:mt-12">
	<div class="mb-3 w-full flex items-center flex-col px-6 text-center ">
		<svg class="flex w-full md:w-1/2 mb-3" data-name="c7-logo-color" xmlns="http://www.w3.org/2000/svg"
			 viewBox="0 0 1074.32 126.05">
			<path
					d="M232.02 67.18c0-27.43 21-47.25 49.22-47.25 15 0 27.82 5.38 36.35 15.36l-11 10.37a32.28 32.28 0 00-24.57-10.77c-19 0-32.81 13.39-32.81 32.29s13.81 32.28 32.81 32.28a32 32 0 0024.55-10.89l11 10.5c-8.53 10-21.39 15.36-36.48 15.36-28.07 0-49.07-19.82-49.07-47.25zM322.73 78.07c0-21 15.75-35.83 37.27-35.83 21.79 0 37.4 14.83 37.4 35.83s-15.61 36-37.4 36c-21.52-.04-37.27-15-37.27-36zm58.14 0c0-13.38-8.93-21.92-20.87-21.92s-20.74 8.54-20.74 21.92 8.93 21.92 20.74 21.92 20.87-8.53 20.87-21.92zM480.87 72.95v40.16h-16.4V75.05c0-12.46-6.17-18.5-16.67-18.5-11.68 0-19.56 7.09-19.56 21.13v35.43h-16.4V43.03h15.62v9.06c5.38-6.43 13.91-9.85 24.14-9.85 16.8 0 29.27 9.58 29.27 30.71zM518.53 39.36v4.2h19.3v13.17h-18.81v56.43h-16.37V56.73H491.1V43.56h11.55v-4.47c0-14.7 8.8-24.28 25.07-24.28 5.64 0 11.16 1.19 14.83 3.81l-4.59 12.34a16.16 16.16 0 00-9.06-2.89c-6.82 0-10.37 3.81-10.37 11.29zM612.11 83.32h-55c2 10.24 10.5 16.8 22.7 16.8 7.88 0 14-2.49 19-7.61l8.79 10.1c-6.29 7.49-16.14 11.42-28.21 11.42-23.49 0-38.72-15.09-38.72-36S556.03 42.2 576.9 42.2c20.47 0 35.43 14.31 35.43 36.23.04 1.35-.09 3.3-.22 4.89zm-55.09-10.89h39.76c-1.31-10.11-9.05-17.06-19.81-17.06s-18.41 6.82-19.95 17.06zM667.36 42.24v15.62a21.13 21.13 0 00-3.81-.39c-12.47 0-20.34 7.35-20.34 21.65v34H626.8V43.03h15.62v10.24c4.73-7.35 13.26-11.03 24.94-11.03zM744.92 83.32h-55c2 10.24 10.5 16.8 22.71 16.8 7.87 0 14-2.49 19-7.61l8.79 10.1c-6.3 7.49-16.14 11.42-28.22 11.42-23.49 0-38.71-15.09-38.71-36s15.35-35.83 36.22-35.83c20.47 0 35.43 14.31 35.43 36.23.04 1.35-.12 3.3-.22 4.89zM689.8 72.43h39.77c-1.32-10.11-9.06-17.06-19.82-17.06s-18.38 6.82-19.95 17.06zM828.65 72.95v40.16h-16.4V75.05c0-12.46-6.17-18.5-16.67-18.5-11.68 0-19.56 7.09-19.56 21.13v35.43h-16.4V43.03h15.62v9.06c5.38-6.43 13.91-9.85 24.14-9.85 16.8 0 29.27 9.58 29.27 30.71zM843.08 78.07c0-21 15.75-35.83 37.93-35.83 13.65 0 24.54 5.65 29.93 16.28l-12.6 7.35a19.83 19.83 0 00-17.46-9.72c-12.07 0-21.26 8.4-21.26 21.92s9.19 21.92 21.26 21.92a19.84 19.84 0 0017.46-9.71l12.6 7.35c-5.39 10.5-16.28 16.4-29.93 16.4-22.18 0-37.93-14.96-37.93-35.96zM988.36 83.32h-55c2 10.24 10.49 16.8 22.7 16.8 7.87 0 14-2.49 19-7.61l8.79 10.1c-6.3 7.49-16.14 11.42-28.21 11.42-23.5 0-38.72-15.09-38.72-36s15.36-35.83 36.22-35.83c20.48 0 35.44 14.31 35.44 36.23.05 1.35-.08 3.3-.22 4.89zm-55.12-10.89h39.78c-1.31-10.11-9.06-17.06-19.82-17.06s-18.38 6.82-19.96 17.06zM1004.7 23.49v15.82h49.47l-42.19 83.85h18.71l43.63-87.96V23.49h-69.62z"
					fill="#131c2d"></path>
			<path fill="#f59d5b" d="M114.27 126.06l10.21-37.65-74.88-.01L0 126.06h114.27z"></path>
			<path fill="#ef7e59" d="M49.6 88.41l14.01-50.77L35.02 0 0 126.06l49.6-37.65z"></path>
			<path fill="#eb5e54" d="M154.51 38.16L204.15 0H35.02l28.59 37.64 90.9.52z"></path>
			<path fill="#e64859" d="M169.24 126.06L204.15 0l-49.64 38.16-24.37 87.9h39.1z"></path>
		</svg>
		<p class="text-gray-600 text-base italic ">C7 Inviter: A tool to create calendar invites easily.</p>
	</div>
	<!--	<div>-->
	<!--		<div class="text-xl">@todo</div>-->
	<!--		<ul>-->
	<!--			<li class="font-bold">Timezone is still incorrect</li>-->
	<!--			<li>Add CSV import of e-mail addresses</li>-->
	<!--			<li>Add payment for mass e-mail invites</li>-->
	<!--			<li>Add e-mail body</li>-->
	<!--			<li>Add example of e-mail sent.</li>-->
	<!--			<li>Make it possible to test.</li>-->
	<!--			<li>Add C7 text to invite. (invite created by c7)</li>-->
	<!--		</ul>-->
	<!--	</div>-->
	<div class="p-2 w-full xl:w-2/3 bg-orange-100 md:rounded shadow">
		<div class="flex p-4 justify-between flex-col md:flex-row">
			<form method="post" action="#" class="flex flex-wrap w-full lg:w-5/12 justify-between" id="event-data">
				<div class="input-container mb-4 w-full">
					<label for="summary"
						   class="ml-2 -mb-4 text-white text-base bg-orange-300 inline-block w-auto px-3 py-1 z-20 relative">Title
						/ Summary</label>
					<input type="text" name="summary" value="Test <?php echo time(); ?>" data-source="title"
						   class="pt-4 px-4 pb-2 border-orange-200 border w-full shadow outline-none block"
					/>
				</div>
				<div class="input-container mb-4 w-full">
					<label for="location"
						   class="ml-2 -mb-4 text-white text-base bg-orange-300 inline-block w-auto px-3 py-1 z-20 relative">Location</label>
					<input type="text" name="location" value="" data-source="where"
						   class="pt-4 px-4 pb-2 border-orange-200 border w-full shadow outline-none block">
				</div>
				<div class="input-container w-full md:w-1/2 mb-4 md:mb-0">
					<label for="date_start"
						   class="ml-2 -mb-4 text-white text-base bg-orange-300 inline-block w-auto px-3 py-1 z-20 relative">Event
						Start</label>
					<input type="text" name="date_start" value="" data-source="when"
						   class="datepicker pt-4 px-4 pb-2 border-orange-200 border w-full shadow outline-none block">
				</div>
				<div class="input-container w-full md:w-1/2">
					<label for="date_end"
						   class="ml-2 -mb-4 text-white text-base bg-orange-300 inline-block w-auto px-3 py-1 z-20 relative">Event
						End</label>
					<input type="text" name="date_end" value="" data-source="when"
						   class="datepicker pt-4 px-4 pb-2 border-orange-200 border w-full shadow outline-none block">
				</div>
				<div class="note mb-2 text-white text-xs w-full flex justify-end">
					<span>Event time based on: </span><span class="current-timezone ml-1"></span>
					<input type="hidden" name="utc_offset_minutes" value="" class="text-black"/>
				</div>
				<div class="input-container mb-4 w-full">
					<label for="description"
						   class="ml-2 -mb-4 text-white text-base bg-orange-300 inline-block w-auto px-3 py-1 z-20 relative">Description</label>
					<textarea type="text" name="description" value="" rows="4" data-source="description"
							  class="pt-4 px-4 pb-2 border-orange-200 border w-full shadow outline-none block">Test</textarea>
				</div>
				<div class="input-container mb-4 w-full">
					<label for="url"
						   class="ml-2 -mb-4 text-white text-base bg-orange-300 inline-block w-auto px-3 py-1 z-20 relative">Website</label>
					<input type="text" name="url" value="https://c7.com" data-source="url"
						   class="pt-4 px-4 pb-2 border-orange-200 border w-full shadow outline-none block">
				</div>
				<div class="input-container mb-4 w-full md:w-1/2">
					<label for="url"
						   class="ml-2 -mb-4 text-white text-base bg-orange-300 inline-block w-auto px-3 py-1 z-20 relative">Organizer</label>
					<input type="text" name="organizer" value="C7" data-source="organizer"
						   class="pt-4 px-4 pb-2 border-orange-200 border w-full shadow outline-none block">
				</div>
				<div class="input-container mb-4 w-full md:w-1/2">
					<label for="url"
						   class="ml-2 -mb-4 text-white text-base bg-orange-300 inline-block w-auto px-3 py-1 z-20 relative">E-mail
						address</label>
					<input type="text" name="organizer_email" value="marinus@mklasen.nl" data-source="organizer_email"
						   class="pt-4 px-4 pb-2 border-orange-200 border w-full shadow outline-none block">
				</div>
			</form>
			<div class="invite h-full md:pt-4 w-full lg:w-7/12 lg:ml-12 flex flex-col" id="invite">
				<div class="bg-white p-4 pt-3 mb-8 rounded shadow">
					<h2 class="text-xl mb-3 empty" data-target="title">Sample data</h2>
					<div class="">
						<div class="row flex mb-2">
							<div class="w-1/3 text-gray-600">
								When
							</div>
							<div class="w-2/3 empty" data-target="when">
								Sample data
							</div>
						</div>
						<div class="row flex mb-2">
							<div class="w-1/3 text-gray-600">
								Where
							</div>
							<div class="w-2/3 empty" data-target="where">
								Sample Data
							</div>
						</div>
						<div class="row flex mb-4">
							<div class="w-1/3 text-gray-600">
								Who
							</div>
							<div class="w-2/3 empty" data-target="organizer">
								Sample Data
							</div>
						</div>
						<div class="mb-2">
							<div class="text-gray-600 mb-1">
								Description
							</div>
							<div class="text-base text-gray-900 empty mb-4 whitespace-pre-wrap"
								 data-target="description">A bunch of sample data.
								A bunch of sample data.
							</div>
						</div>
						<div class="w-2/3 mb-1">
							<a class="underline empty" href="#" data-target="url">Sample data</a>
						</div>
					</div>
				</div>
				<div class="flex justify-center mb-6">
					<a id="download-ics" href="#"
					   class="bg-white p-3 py-2 inline-block rounded-lg text-orange-400 inline-flex shadow-lg">
						<svg class="text-orange-400 fill-current" xmlns="http://www.w3.org/2000/svg" height="24"
							 viewBox="0 0 24 24" width="24">
							<path d="M0 0h24v24H0z" fill="none"/>
							<path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
						</svg>
						<span class="ml-2">Download Calendar Invite</span>
					</a>
				</div>
				<div class="flex justify-center flex-col text-center text-sm items-center">
					<span class="text-white mb-2 italic">or, send the invite to your e-mail and forward it:</span>
					<div class="flex justify-center w-8/12 align-center">
						<input type="text" name="email" class="p-2 outline-none w-full" id="email-address"
							   placeholder="Enter your e-mail address.."/>
						<a href="#" id="send-email"
						   class="bg-orange-400 inline-block inline-flex items-center justify-center px-2 outline-none">
							<svg class="text-white fill-current" xmlns="http://www.w3.org/2000/svg" height="24"
								 viewBox="0 0 24 24" width="24">
								<path d="M0 0h24v24H0z" fill="none"/>
								<path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="text-white text-center text-xs italic mb-1">&copy; copyright <?php echo date( 'Y' ); ?>
			conference7.
		</div>
	</div>
	<div class="py-3">
		<a class="text-orange-300 text-sm" href="https://conference7.com">Tools for conferences -
			conference7.com</a>
	</div>
</div>
</body>
</html>