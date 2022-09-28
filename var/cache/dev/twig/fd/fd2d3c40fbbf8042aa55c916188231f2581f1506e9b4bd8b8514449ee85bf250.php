<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_03ddf34e33e1781e585ce6aa0906c89208f5da2e34bb5e53c4db3dae995cbdf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c3e5895579641c75d4d28f8c5ff1b20c3de2e8617ea67dcb9b2bcc5549235d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c3e5895579641c75d4d28f8c5ff1b20c3de2e8617ea67dcb9b2bcc5549235d6->enter($__internal_8c3e5895579641c75d4d28f8c5ff1b20c3de2e8617ea67dcb9b2bcc5549235d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_3981ac0ee1b9f6a6b925f0a2b16e685c10c26767708a5dcd1554b8fd8994fa48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3981ac0ee1b9f6a6b925f0a2b16e685c10c26767708a5dcd1554b8fd8994fa48->enter($__internal_3981ac0ee1b9f6a6b925f0a2b16e685c10c26767708a5dcd1554b8fd8994fa48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_8c3e5895579641c75d4d28f8c5ff1b20c3de2e8617ea67dcb9b2bcc5549235d6->leave($__internal_8c3e5895579641c75d4d28f8c5ff1b20c3de2e8617ea67dcb9b2bcc5549235d6_prof);

        
        $__internal_3981ac0ee1b9f6a6b925f0a2b16e685c10c26767708a5dcd1554b8fd8994fa48->leave($__internal_3981ac0ee1b9f6a6b925f0a2b16e685c10c26767708a5dcd1554b8fd8994fa48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
