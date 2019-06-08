merge conflict
git status
 2174  git checkout UAT
 2175  git status
 2176  git pull origin UAT
 2177  git checkout -
 2178  git rebase UAT
 2179  git status



// checkout 
git checkout -b   ----new branch
git checkout branchname -----switched to branchname
git checkout filename -----remove changes of this file


Basic step to follow:
step1:git checkout -b "branchname"
step2:git add filename
step3:git commit -m "commit message"
step4: git pull origin branchname
step5: git push origin branchname

//amending last commit message
 git commit --amend -m "New and correct message"

//Undoing the Last Commit with localchanges
git reset --soft HEAD~1

//Undoing the Last Commit without localchanges
git reset --hard HEAD~1

// How can I undo an older commit?
git revert 0ad5a7a6(hash commit)

//Cleaning Ignored Files
$ git rm -r --cached .
$ git add .
$ git commit -m "Clean up ignored files"

//undo last add file
git reset filename

//Changing Your Committer Name & Email Globally
$ git config --global user.name "John Doe"
$ git config --global user.email "john@doe.org"


/Changing Your Committer Name & Email per Repository
$ git config user.name "John Doe"
$ git config user.email "john@doe.org"


//Deleting local branches in Git
$ git branch -d feature/login

//Deleting remote branches in Git
git push origin --delete feature/login
// handelling large file in git
 use git lfs















