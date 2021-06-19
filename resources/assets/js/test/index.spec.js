
import { mount } from '@vue/test-utils'
import SearchComponent from '../components/SearchComponent.vue'

test('it works', () => {
  expect(1 + 1).toBe(2)
})

test('should mount without crashing', () => {
  const wrapper = mount(ExampleComponent)

  expect(wrapper).toMatchSnapshot()
})
