<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4aa90122de5189fa5d1802e282f451cd4cc102373b07a6ce59647a07d70def54 extends Twig_Template
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
        $__internal_8f053ad46a6ba94106fdd5db6d80465294f882a2811fa210d97202aefa9f9725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f053ad46a6ba94106fdd5db6d80465294f882a2811fa210d97202aefa9f9725->enter($__internal_8f053ad46a6ba94106fdd5db6d80465294f882a2811fa210d97202aefa9f9725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_70c62ffe7acf17c8fb6bb2d082a0d1f7c64ae181f1d2f7db144e4cb5fd62ad60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c62ffe7acf17c8fb6bb2d082a0d1f7c64ae181f1d2f7db144e4cb5fd62ad60->enter($__internal_70c62ffe7acf17c8fb6bb2d082a0d1f7c64ae181f1d2f7db144e4cb5fd62ad60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8f053ad46a6ba94106fdd5db6d80465294f882a2811fa210d97202aefa9f9725->leave($__internal_8f053ad46a6ba94106fdd5db6d80465294f882a2811fa210d97202aefa9f9725_prof);

        
        $__internal_70c62ffe7acf17c8fb6bb2d082a0d1f7c64ae181f1d2f7db144e4cb5fd62ad60->leave($__internal_70c62ffe7acf17c8fb6bb2d082a0d1f7c64ae181f1d2f7db144e4cb5fd62ad60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
