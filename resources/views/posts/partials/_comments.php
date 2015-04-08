<div ng-app="app">
    <div ng-controller="CommentCtrl">
        <ul>
            <li ng-repeat="comment in comments | orderBy:'-created_at'">
                <p>{{ comment.content }}</p>
                <p>by {{ comment.user.username }} at {{ comment.created_at }}</p>
            </li>
        </ul>

        <form name="newComment" ng-submit="addComment()">
            <input type="text" ng-model="message" required="" placeholder="Share your thoughts here"  />
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input type="submit" value="Submit" />
        </form>
        {{ comment }}
    </div>
</div>