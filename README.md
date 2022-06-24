
# Accessibility Bar

React component for import but also to be used directly as "crude vanilla js lib".
It's an accessibility bar (floating modal) that is comprised of the following features:
- Contrast changer (available for the entire site)
- Accessible font changer (available for the entire site)
- Read me this page
- Read me everything that has been selected (just select any text after importing the module and it will be read to you)
- Font size increment / decrement
- Lines spacing changer
- Record your answers to any form, just speak your answer and it will be transcribed in the input

Everyone is welcome to use it.

```js
import { AccessibilityModal } from 'components';
...
return (
    <AccessibilityModal />
)
```

There's an example app in the repo.

```js
/example/my-app
npm install
npm run dev
```
[http://localhost:8081](http://localhost:8081)
