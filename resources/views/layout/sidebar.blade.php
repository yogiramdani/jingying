<!--begin::Aside menu-->
<div class="aside-menu flex-column-fluid">
		<!--begin::Aside Menu-->
		<div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
			<!--begin::Menu-->
			<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
				<div class="menu-item">
					<div class="menu-content pb-2">
						<span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
					</div>
				</div>
				<div class="menu-item">
					<a class="menu-link active" href="{{ route('dashboard') }}">
						<span class="menu-icon">
							<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
									<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
									<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
									<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</span>
						<span class="menu-title">Dashboard</span>
					</a>
				</div>
				<div class="menu-item">
					<a class="menu-link" href="{{ route('pemberi-kerja') }}">
						<span class="menu-icon">
							<!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
									<path opacity="0.3" d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z" fill="black" />
									<path d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</span>
						<span class="menu-title">Pemberi Kerja</span>
					</a>
				</div>
				<div class="menu-item">
					<a class="menu-link" href="{{ route('post') }}">
						<span class="menu-icon">
							<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
									<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</span>
						<span class="menu-title">Pekerjaa Tersedia</span>
					</a>
				</div>
				
			</div>
			<!--end::Menu-->
		</div>
		<!--end::Aside Menu-->
	</div>
	<!--end::Aside menu-->
	<div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
		<a href="{{ route('docs',['id'=>'auth']) }}" class="btn btn-custom btn-primary w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="" data-bs-original-title="200+ in-house components and 3rd-party plugins">
			<span class="btn-label">Docs</span>
			<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
			<span class="svg-icon btn-icon svg-icon-2">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z" fill="black"></path>
					<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"></path>
				</svg>
			</span>
			<!--end::Svg Icon-->
		</a>
	</div>