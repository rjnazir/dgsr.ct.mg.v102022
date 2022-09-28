<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_5a30c80c89ec125006c9a517e3691073439be0f573d5b801078bfe52c3d49e46 extends Twig_Template
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
        $__internal_02e6f44eb37f29b8ffe598e8bad328d6417204d262b2f6acab2baf64c393c93e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02e6f44eb37f29b8ffe598e8bad328d6417204d262b2f6acab2baf64c393c93e->enter($__internal_02e6f44eb37f29b8ffe598e8bad328d6417204d262b2f6acab2baf64c393c93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_0a905309be4cdb8e04bbcc56a3c01b103c0b1c0fbbe72fac4e13fe94948a24ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a905309be4cdb8e04bbcc56a3c01b103c0b1c0fbbe72fac4e13fe94948a24ae->enter($__internal_0a905309be4cdb8e04bbcc56a3c01b103c0b1c0fbbe72fac4e13fe94948a24ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_02e6f44eb37f29b8ffe598e8bad328d6417204d262b2f6acab2baf64c393c93e->leave($__internal_02e6f44eb37f29b8ffe598e8bad328d6417204d262b2f6acab2baf64c393c93e_prof);

        
        $__internal_0a905309be4cdb8e04bbcc56a3c01b103c0b1c0fbbe72fac4e13fe94948a24ae->leave($__internal_0a905309be4cdb8e04bbcc56a3c01b103c0b1c0fbbe72fac4e13fe94948a24ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
