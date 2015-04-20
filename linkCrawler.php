

<?php include "layout/head.php"; ?>

	<div class="small-10 small-offset-1" ng-controller="linkController">
		<div  class="small-6 columns">
			<input type="text" id="website" ng-model="website" placeholder="http://somethingto.crawl" class="radius">
		</div>
		<div  class="small-6 columns">
			<button class="small-12 button success radius columns" ng-click="crawlSearch()"> crawl </button>
		</div>
		
		<button class="small-4 columns button info radius" ng-click="checkSqliteDB()" disabled> set BD </button>
		<button class="small-4 button secondary radius columns" ng-click="selectSearch()" disabled> result </button>
		<button class="small-4 button alert radius columns" ng-click="emptySqliteDB()" disabled> empty DB </button>
		
		<div class="small-12 text-center" id="status"></div>
	</div>
	
	<table id="check" class="small-12 text-center"></table>


	<script type="text/javascript" language="javascript">
	    var myApp = angular.module('crawler', []);

		myApp.controller('linkController', ['$scope', function($scope) {
		    $scope.website = 'http://tocausan.tumblr.com';
		
		    
		    $scope.checkSqliteDB = function(){
		   	    ajaxCheck('sqliteDB/crud/create_table.php')
			}
			    
		    $scope.crawlSearch = function(){
			    ajaxCheck('crawler.php?website='+$scope.website)
		    }
		    
		    $scope.selectSearch = function(){
			    ajaxCheck('sqliteDB/crud/select.php')
		    }
		    
		    $scope.emptySqliteDB = function(){
			    ajaxCheck('sqliteDB/crud/deleteAll.php')
		    }
	    
	    }]);
	</script>

<?php include "layout/footer.php"; ?>


	
