// vim: set expandtab tabstop=4 shiftwidth=4 autoindent smartindent: -->
if (Meteor.isClient) {
    angular.module('socially', ['angular-meteor']);

    angular.module("socially").controller("PartiesListCtrl", ['$scope',
        function($scope) {
            $scope.name = "Wurld";
            $scope.parties = [
                {'name':    'Dubstep-Free Zone',
                    'description':  'Can we please for an evening not listen to dubstep.'},
                {'name':    'All dubstep all the time',
                    'description':  'Get it on!'},
                {'name':    'Savage lounging',
                    'description':  'Leisure suit required. And only fiercest manners.'}
            ];
        }]);
    }



