# dojo-sync
Main development repository for "Dojo-Sync" (Software Engineering Final Project).


## Workflow Rules (Read Before Coding!)

**⛔ NEVER commit directly to `main` or `development`.**

### How to Start a Task
1. Always start from dev: `git checkout development`
2. Update your code: `git pull origin development`
3. Create a branch: `git checkout -b <type>/<description>`

### Branch Naming Convention
Use these prefixes so we know what you are working on:
* **New Feature:** `feature/login-page`, `feature/add-calendar`
* **Bug Fix:** `fix/white-screen-error`, `fix/typo-on-home`
* **UI/Design:** `style/change-colors`, `design/update-logo`
* **Docs/Misc:** `docs/update-readme`, `chore/cleanup-files`

### How to Finish
* Push your branch.
* Open a Pull Request (PR) targeting **`development`**.
* **Delete your branch** after it is merged!
