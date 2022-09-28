<?php

/* backoffice/base_admin_breadcrumb.html.twig */
class __TwigTemplate_c6a0a531c1adac467c85770d0fb0359070ed5547a7c0af1146b77a06d7486cd3 extends Twig_Template
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
        $__internal_57874046abc858739bc08a126c7ad32b1b2473a8c67e4256ff6c60ec3811d072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57874046abc858739bc08a126c7ad32b1b2473a8c67e4256ff6c60ec3811d072->enter($__internal_57874046abc858739bc08a126c7ad32b1b2473a8c67e4256ff6c60ec3811d072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backoffice/base_admin_breadcrumb.html.twig"));

        $__internal_db6f8a1ef2ccfd105f630e7041ec4c7c2cfb424807b153222e446f4db7a00d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6f8a1ef2ccfd105f630e7041ec4c7c2cfb424807b153222e446f4db7a00d9d->enter($__internal_db6f8a1ef2ccfd105f630e7041ec4c7c2cfb424807b153222e446f4db7a00d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backoffice/base_admin_breadcrumb.html.twig"));

        // line 1
        echo "<section class=\"content-header\">
    <h1>&nbsp;
        ";
        // line 10
        echo "    </h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aes_admin_home");
        echo "\"><i class=\"fa fa-dashboard\"></i> Acceuil</a></li>
        ";
        // line 13
        if (array_key_exists("tBreadcrumbs", $context)) {
            // line 14
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tBreadcrumbs"] ?? $this->getContext($context, "tBreadcrumbs")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "            ";
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 16
                    echo "            <li class=\"active\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                    echo "</li>       
            ";
                } else {
                    // line 18
                    echo "            <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "href", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                    echo "</a></li>        
            ";
                }
                // line 20
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        ";
        }
        // line 22
        echo "    </ol>
</section>";
        
        $__internal_57874046abc858739bc08a126c7ad32b1b2473a8c67e4256ff6c60ec3811d072->leave($__internal_57874046abc858739bc08a126c7ad32b1b2473a8c67e4256ff6c60ec3811d072_prof);

        
        $__internal_db6f8a1ef2ccfd105f630e7041ec4c7c2cfb424807b153222e446f4db7a00d9d->leave($__internal_db6f8a1ef2ccfd105f630e7041ec4c7c2cfb424807b153222e446f4db7a00d9d_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/base_admin_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 22,  88 => 21,  74 => 20,  66 => 18,  60 => 16,  57 => 15,  39 => 14,  37 => 13,  33 => 12,  29 => 10,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"content-header\">
    <h1>&nbsp;
        {#{% if tBreadcrumbs is defined %}
            {{ tBreadcrumbs | last['label'] }}
        
             <small>{{ tBreadcrumbs | last['desc'] }}</small>
        {% else %}
            &nbsp;
        {% endif %}#}
    </h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('aes_admin_home') }}\"><i class=\"fa fa-dashboard\"></i> Acceuil</a></li>
        {% if tBreadcrumbs is defined %}
        {% for item in tBreadcrumbs %}
            {% if loop.last %}
            <li class=\"active\">{{ item.label }}</li>       
            {% else %}
            <li><a href=\"{{ item.href }}\">{{ item.label }}</a></li>        
            {% endif %}
        {% endfor %}
        {% endif %}
    </ol>
</section>", "backoffice/base_admin_breadcrumb.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app\\Resources\\views\\backoffice\\base_admin_breadcrumb.html.twig");
    }
}
