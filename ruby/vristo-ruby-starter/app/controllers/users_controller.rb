class UsersController < ApplicationController
    def users_profile
        render layout: "default", :template =>'users/profile'
    end

    def users_account_settings
        render layout: "default", :template =>'users/user-account-settings'
    end
end
