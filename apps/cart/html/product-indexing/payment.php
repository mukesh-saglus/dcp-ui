<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google" content="notranslate" />
<!-- Tell the browser to be responsive to screen width -->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
<!-- Page Title -->
<title>Smart Header</title>
<!-- Bootstrap 4 Stylesheet -->
<?php $basedir = "http://".$_SERVER['SERVER_NAME'] . '/DCP-UI/'; ?>
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap.min.css" />
<!-- Common Css Stylesheet -->
<link rel="stylesheet" href="<?php echo $basedir; ?>css/general.css" />
<link rel="stylesheet" href="<?php echo $basedir; ?>css/elements.css" />
<!-- Bootstrap Select Dropdown Stylesheet -->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/bootstrap/bootstrap-select.css" />
<!-- Smart Header Css Stylesheet -->
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/header.css" />
<!-- Smart Dahboard Css Stylesheet -->
<link rel="stylesheet" href="<?php echo $basedir; ?>apps/smart/css/custom.css" />
<!-- Custom Scrollbar Stylesheet -->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/scrollbar/jquery.mCustomScrollbar.css" />
<!-- Country Code Plugin Stylesheet -->
<link rel="stylesheet" href="<?php echo $basedir; ?>vendors/tel-input/intlTelInput.css" />
<!-- Country Chooser Flags -->
<link href="<?php echo $basedir; ?>vendors/flagstrap/css/flags.css" rel="stylesheet" />
<link rel="stylesheet" href="../../css/cart.css" />
</head>

<body>
<!-- Product Information Header -->
<div class="sticky-fix">
	<header class="product-indexing-header">
		<div class="container-fluid px-md30">
			<div class="row align-items-center">
				<div class="col-8 col-sm-2 order-sm-1 pr-sm0">
					<a href="categories.php" class="t-decoration-none white-clr f-md-15 f-14"><i class="icon-back"></i>&nbsp;&nbsp;Product List</a>
				</div>
				<div class="col-4 col-sm-2 order-sm-3 text-right">
					<a href="javascript:void(0);" class="base-btn green-btn publish-btn">Save</a>
				</div>
				<div class="col-12 col-sm-8 order-sm-2 mt10 mt-sm0 p-md0">
					<ul class="item-info-step-wizard f-md-12 f-11 w400">
						<li>
							<a href="product-information.php" class="wizard-sep complete-step">
								<!-- Done Step -->
								<i class="icon-tick f-9"></i>
								<span class="pl5 pl-lg12"><span class="d-none d-md-inline-block pr2">1.</span>Item Info</span>
							</a>
						</li>
						<li>
							<a href="payment.php" class="wizard-sep active">
								<!-- Current Step -->
								<span class="current-step__dot">
									<i class="icon-dot f-5 opacity20"></i>&nbsp;<i class="icon-dot f-5 opacity60"></i>&nbsp;<i class="icon-dot f-5"></i>
								</span>
								<span class="pl5 pl-lg12"><span class="d-none d-md-inline-block pr2">2.</span>Payment</span>
							</a>
						</li>
						<li>
							<a href="delivery.php" class="wizard-sep">
								<span class="pl5 pl-lg12"><span class="d-none d-md-inline-block pr2">3.</span>Delivery</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);" class="wizard-sep preview-publish-step"> <span class="d-none d-md-inline-block pr2">4.</span>Preview & Publish </a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
</div>
<!-- Product Information Header End -->
<!-- Min container -->
<div class="container-fluid smart-form">
	<div class="row align-items-stretch">
		<div class="col-12 col-md-3 col-lg-3 col-xl-2 product-tree p0 d-flex align-self-stretch">
			<div class="product-title-box f-14 w-100">
				<div class="w400 f-15">Payment</div>
				<ul class="d-gblue-clr mt16">
					<li class="active">Currency</li>
					<li class="active">Pricing</li>
					<li>Pricing Option</li>
				</ul>
			</div>
		</div>
		<div class="col-xl-10 col-lg-9 col-md-9 col-12 p15 p-md30 f-14">
			<div class="row">
				<div class="w500 f-15 mb15 col-12">Digital Delivery</div>
				<div class="col-12 col-md-6">
					<div class="d-gblue-clr mb10">
						Choose Currency
					</div>
					<select class="selectpicker">
						<option>$ USD</option>						
					</select>
				</div>
			</div>
			<div class="row mt15 mt-md30">
				<div class="col-12">
					<!-- Pricing -->
					<div class="w500 f-15 mb10">Pricing</div>
					<div class="d-flex align-items-center flex-wrap mb15 mb-md20">
						<div class="mr15 mr-md20 mb10">
							Item variety
							<a class="ml10 d-gblue-clr t-decoration-none" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select this “Yes” if you want to sell multiple variants of a product.">
								<i class="icon-information f-13"></i>
							</a>
						</div>
						<div class="smart-radio-btn radio-strong-blue mr15 mr-md30">
							<input name="radio2" id="p_yes" type="radio">
							<label for="p_yes" class="d-gblue-clr"> Yes </label>
						</div>
						<div class="smart-radio-btn radio-strong-blue">
							<input name="radio2" id="p_no" type="radio" checked="">
							<label for="p_no" class="d-gblue-clr"> No</label>
						</div>
					</div>
					<!-- Pricing Option -->
					<div class="w500 f-15 mb15">Pricing Option</div>
					<div class="d-flex align-items-center flex-wrap">
						<div class="smart-radio-btn radio-strong-blue mr15 mr-md30">
							<input name="payment-select" id="Payment" type="radio" value="one-time-payment" checked="">
							<label for="Payment" class="d-gblue-clr"> One Time Payment </label>
						</div>
						<div class="smart-radio-btn radio-strong-blue mr15 mr-md30">
							<input name="payment-select" id="Recurring" type="radio" value="recurring-payment">
							<label for="Recurring" class="d-gblue-clr"> Recurring Payment</label>
						</div>
						<div class="smart-radio-btn radio-strong-blue">
							<input name="payment-select" id="Free" type="radio" value="free-payment">
							<label for="Free" class="d-gblue-clr"> Free</label>
						</div>
					</div>
				</div>
			</div>
			<!-- Accordion Start -->
			<div class="row mt15 mt-md20 onetime-payment">
				<div class="col-11 col-md payment-col-left segment-accordion">
					<div id="accordion" class="accordion">
						<div class="card mb-0 f-16">
							<div class="card-header" data-toggle="collapse" href="#VarietyA" aria-expanded="true">
								<a class="card-title lato-font">&nbsp; Variety A</a> 
							</div>
							<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="A variety of a product denotes multiple selling options with different packages." class="pull-right d-gblue-clr segment-info"><i class="icon-information"></i></a>
							<div id="VarietyA" class="collapse show">
								<div class="card-body">
									<!-- Name of the item variety -->
									<div class="row align-items-center d-gblue-clr">
										<div class="col-12 col-md-5 col-xl-3">
											<label class="m0">Name of the item variety</label>
										</div>
										<div class="col-12 col-md-7 col-xl-6 mt10 mt-md0">
											<input type="text" class="form-control" placeholder="Enter name">
										</div>
									</div>
									<!-- Duration -->
									<div class="d-flex smart-checkbox-btn checkbox-strong-blue ml5 mt15 mt-md30">
										<input id="more_item" type="checkbox" value="more-than-one-item">
										<label for="more_item" class="mb0 d-gblue-clr">Set Trial for Certain Duration</label>
									</div>
									<!-- Duration Div Toggle -->
									<div class="more-than-one-item">
									<div class="row align-items-center">
										<div class="col-xl-2 col-md-3 col-6 mt15">
											<select class="selectpicker">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>6</option>
												<option>7</option>
												<option>8</option>
												<option>9</option>
												<option>10</option>
												<option>11</option>
												<option>12</option>
												<option>13</option>
												<option selected>14</option>
												<option>15</option>
											</select>
										</div>
										<div class="col-xl-2 col-md-4 col-6 mt15">
											<select class="selectpicker">
												<option>Days</option>
												<option>Weeks</option>
												<option>Months</option>
											</select>
										</div>
										<div class="col-xl-1 col-md-2 col-6 mt15">
											<label class="m0 d-gblue-clr">Price</label>
										</div>
										<div class="col-xl-2 col-md-3 col-6 mt15 pl-md0 pr-md30">
											<input type="text" class="form-control" placeholder="Price" value="14">
										</div>
									</div>
									<div class="row align-items-center mt15 mt-md30">
										<div class="col-12">
											<label class="m0 d-gblue-clr">Price After Trial</label>
										</div>
										<div class="col-xl-2 col-md-3 col-6 mt15">
											<input type="text" class="form-control" placeholder="Price After Trial" value="47">
										</div>
										<div class="col-xl-3 col-md-4 col-6 mt15 pr-xl55 one-time-payment-show">
											<select class="selectpicker">
												<option>Weekly</option>
												<option selected>Monthly</option>
												<option>Quarterly</option>
												<option>Half Yearly</option>
												<option>Yearly</option>
											</select>
										</div>
									</div>
									<div class="row align-items-center d-gblue-clr mt15">
										<div class="col-12 col-md-8 col-xl-4 pr-md0">
											<label class="m0">
												Maximum Number of Recurring Payments
												<a class="ml10 d-gblue-clr t-decoration-none" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Select the maximum number of payments allowed for this particular variety.">
												<i class="icon-information f-13"></i>
												</a>
											</label>
										</div>
										<div class="col-12 col-md-4 col-xl-2 mt10 mt-md0 pr-md30">
											<select class="selectpicker">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>6</option>
												<option>7</option>
												<option>8</option>
												<option>9</option>
												<option>10</option>
												<option>11</option>
												<option>12</option>
												<option>13</option>
												<option>14</option>
												<option>15</option>
												<option>16</option>
												<option>17</option>
												<option>18</option>
												<option>19</option>
												<option>20</option>
												<option>21</option>
												<option>22</option>
												<option>23</option>
												<option>24</option>
												<option>25</option>
												<option>26</option>
												<option>27</option>
												<option>28</option>
												<option>29</option>
												<option>30</option>
												<option>31</option>
												<option>32</option>
												<option>33</option>
												<option>34</option>
												<option>35</option>
												<option>36</option>
												<option>37</option>
												<option>38</option>
												<option>39</option>
												<option>40</option>
												<option>41</option>
												<option>42</option>
												<option>43</option>
												<option>44</option>
												<option>45</option>
												<option>46</option>
												<option>47</option>
												<option>48</option>
												<option>49</option>
												<option>50</option>
												<option>51</option>
												<option>52</option>
												<option>53</option>
												<option>54</option>
												<option>55</option>
												<option>56</option>
												<option>57</option>
												<option>58</option>
												<option>59</option>
												<option>60</option>
												<option>61</option>
												<option>62</option>
												<option>63</option>
												<option>64</option>
												<option>65</option>
												<option>66</option>
												<option>67</option>
												<option>68</option>
												<option>69</option>
												<option>70</option>
												<option>71</option>
												<option>72</option>
												<option>73</option>
												<option>74</option>
												<option>75</option>
												<option>76</option>
												<option>77</option>
												<option>78</option>
												<option>79</option>
												<option>80</option>
												<option>81</option>
												<option>82</option>
												<option>83</option>
												<option>84</option>
												<option>85</option>
												<option>86</option>
												<option>87</option>
												<option>88</option>
												<option>89</option>
												<option>90</option>
												<option>91</option>
												<option>92</option>
												<option>93</option>
												<option>94</option>
												<option>95</option>
												<option>96</option>
												<option>97</option>
												<option>98</option>
												<option>99</option>
												<option>100</option>
											</select>
										</div>
									</div>
									</div>
									<!-- Dime Sale -->
									<div class="d-flex align-items-center flex-wrap mt15 mt-md30 f-14">
										<div class="mr15 mr-md20 mb10">
											Is it a Dime Sale?
										</div>
										<div class="smart-radio-btn radio-strong-blue mr15 mr-md30">
											<input name="dimesale" id="sale_yes" type="radio" value="dime_sale">
											<label for="sale_yes" class="d-gblue-clr"> Yes </label>
										</div>
										<div class="smart-radio-btn radio-strong-blue">
											<input name="dimesale" id="sale_no" type="radio" value="no_dime_sale" checked="">
											<label for="sale_no" class="d-gblue-clr"> No</label>
										</div>
									</div>
									<!-- Dime Sale Toggle Div -->
									<div class="dime-sale">
										<div class="row align-items-center mt15 mt-md10">
											<div class="col-12 col-md-5 col-xl-3">
												<label class="m0 d-gblue-clr">Increase the price by</label>
											</div>
											<div class="col-xl-2 col-md-3 col-12 mt15 mt-md0 pr-xl30">
												<input type="text" class="form-control" placeholder="" value="10">
											</div>
											<div class="col-xl-2 col-md-3 col-12 mt15 mt-md0 pl-md0 pr-xl0">
												<select class="selectpicker">
													<option>Currency</option>
													<option>Percentage</option>
												</select>
											</div>
										</div>
										<div class="row align-items-center mt15 mt-md20">
											<div class="col-12 col-md-5 col-xl-3">
												<label class="m0 d-gblue-clr">Increase price after every sales?</label>
											</div>
											<div class="col-xl-2 col-md-3 col-12 mt15 mt-md0 pr-xl30">
												<input type="text" class="form-control" placeholder="" value="3">
											</div>
										</div>
										<div class="row align-items-center mt15 mt-md20">
											<div class="col-12 col-md-5 col-xl-3">
												<label class="m0 d-gblue-clr">What will be the maximum price</label>
											</div>
											<div class="col-xl-2 col-md-3 col-12 mt15 mt-md0 pr-lg5">
												<input type="text" class="form-control" placeholder="" value="100">
											</div>
										</div>
									</div>
									<!-- time Sale Div -->
									<div class="d-flex align-items-center flex-wrap mt15 mt-md30 f-14">
										<div class="mr15 mr-md20 mb10">
											Is it a time Sale?
										</div>
										<div class="smart-radio-btn radio-strong-blue mr15 mr-md30">
											<input name="timesale" id="timesale_yes" type="radio" value="time_sale">
											<label for="timesale_yes" class="d-gblue-clr"> Yes </label>
										</div>
										<div class="smart-radio-btn radio-strong-blue">
											<input name="timesale" id="timesale_no" type="radio" value="no_time_sale" checked="">
											<label for="timesale_no" class="d-gblue-clr"> No</label>
										</div>
									</div>
									<!-- time Sale Toggle Div -->
									<div class="time-sale">
										<div class="row align-items-center mt15 mt-md10">
											<div class="col-12 col-md-5 col-xl-3">
												<label class="m0 d-gblue-clr">Increase the price by</label>
											</div>
											<div class="col-xl-2 col-md-3 col-12 mt15 mt-md0 pr-xl30">
												<input type="text" class="form-control" placeholder="" value="10">
											</div>
										</div>
										<div class="row align-items-center mt15 mt-md20">
											<div class="col-12 col-md-5 col-xl-3">
												<label class="m0 d-gblue-clr">Increase price after every sales?</label>
											</div>
											<div class="col-xl-2 col-md-3 col-12 mt15 mt-md0 pr-xl30">
												<input type="text" class="form-control" placeholder="" value="12">
											</div>
											<div class="col-xl-2 col-md-3 col-12 mt15 mt-md0 pl-md0 pr-xl0">
												<select class="selectpicker">
													<option>Days</option>
													<option>Weeks</option>
													<option>Months</option>
												</select>
											</div>
										</div>
										<div class="row align-items-center mt15 mt-md20">
											<div class="col-12 col-md-5 col-xl-3">
												<label class="m0 d-gblue-clr">What will be the maximum price</label>
											</div>
											<div class="col-xl-2 col-md-3 col-12 mt15 mt-md0 pr-lg5">
												<input type="text" class="form-control" placeholder="" value="100">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-1 col-md-1 payment-col-right mt17 pl0">
					<a href="#" class="p-blue-clr t-decoration-none f-16"><i class="icon-add-three"></i></a>
				</div>
			</div>
			<!-- Button -->
			<div class="text-center text-md-right mt15 mt-md30 mt-on-free-payment">
				<a href="javascript:void(0)" class="base-btn default-btn mr5 btn-xs-block">Back</a>
				<a href="javascript:void(0)" class="base-btn default-btn mr5 btn-xs-block mt10 mt-md0">Save as Draft</a>
				<a href="#" class="base-btn blue-btn btn-xs-block mt10 mt-md0">Save & Next</a>
			</div>
		</div>
	</div>
</div>
<!-- Min container End -->

<!-- Footer Include File-->
<?php include '../../../smart/html/includes/dcp-footer.php'; ?>
<!-- Footer Include File end -->
<script src="../../js/script.js"></script>
</body>
</html>