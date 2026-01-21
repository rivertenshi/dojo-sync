# dojo-sync
Main development repository for "Dojo-Sync" (Software Engineering Final Project).


## Workflow Rules (Read Before Coding!)

**⛔ NEVER commit directly to `main` or `development`.**

### 🛡️ Code Review Protocol
To keep our code clean, we have a strict approval process:
* **Required Approvals:** 2 Reviews.
* **Authorized Approvers:** Only **Christian** and **Ken** are allowed to approve Pull Requests.

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
1.  **Commit your work:** Save your changes with a clear message.
    * `git add .`
    * `git commit -m "Finished login page layout"`
2.  **Push your branch:** Upload it to GitHub.
    * `git push origin feature/login-page`
3.  **Open a Pull Request (PR):** Go to GitHub and open a PR targeting **`development`**.
4.  **Assign Reviewers:** Select **Christian** and **Ken**.
5.  **STOP & NOTIFY:** 🛑 **Do NOT merge the code yourself.**
    * Notify Christian or Ken that your PR is ready.
    * We will review, approve, and **we will handle the merge.**

<sub><i>Thank you, kaya mo 'yan. love u mwah <33</i></sub>
