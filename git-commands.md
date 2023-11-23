GIT/GITHUB

BASH COMMANDS

CONFIGURE USER (Logging in)
git config --global user.name "Your Name"
git config --global user.email "your.email@example.com"

INTIALIZE A GIT IN A PATH - (cd path/to/your/project)
git init

STAGE CHANGES
git add file.txt (for specific file)
git add . (for all of files under the directory)

COMMITTING CHANGES
git commit -m "Your commit Message here" (for committing all changes)
git status (shows the status of your directory)
git log (commit history)

BRANCHING
git branch (see local branch)
git branch -r (see remote branch)
git branch -a (see all local and remote branch)
git branch new-branch-name (creating branch)
git switch new-branch-name (selecting the branch)
git merge branch-to-merge (name of the branch, make sure your in the main branch to merge)

Others
git checkout -b my-branch-name (alternative way to create a new branch)
git checkout my-branch-name (alternative way to select the other branch)
git branch -d my-branch-name (alternative way to delete local branch)
git branch -D my-branch-name (alternative way to delete local branch)

Remote
git pull (list all branches from remote)
git remote add origin <repository.url> (add a remote repository)
git push -u origin my-branch-name (upload the branch to remote repository)
git push -u origin HEAD(upload the local branch that already exists in the remote branch)
git push (upload if your local branch already exists in the remote branch)

Deleting Branch
git branch -d branch-name (delete branch locally)
git push origin --delete branch-name (deletes the remote branch)

CLONE REMOTE REPOSITORY
goto the the directory (cd /your/directory)
git clone <repo_url>

DELETE .git
rmdir /s /q .git (deletes the init of git in repo or directory)