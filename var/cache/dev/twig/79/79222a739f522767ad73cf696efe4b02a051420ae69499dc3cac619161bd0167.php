<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_1a2d12532086ceaaf559f3c28137f8989d7434df19865c857d8323b7fa91b445 extends Twig_Template
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
        $__internal_80199f4178bb04b014e5abb6d30fa13d78f4c162dee9b2282798a45e0f5fbb21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80199f4178bb04b014e5abb6d30fa13d78f4c162dee9b2282798a45e0f5fbb21->enter($__internal_80199f4178bb04b014e5abb6d30fa13d78f4c162dee9b2282798a45e0f5fbb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_f5ba3947fa05e8b20a34000c08c0151a5ff8cc2786d23af3e3c304dcec122cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ba3947fa05e8b20a34000c08c0151a5ff8cc2786d23af3e3c304dcec122cbf->enter($__internal_f5ba3947fa05e8b20a34000c08c0151a5ff8cc2786d23af3e3c304dcec122cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_80199f4178bb04b014e5abb6d30fa13d78f4c162dee9b2282798a45e0f5fbb21->leave($__internal_80199f4178bb04b014e5abb6d30fa13d78f4c162dee9b2282798a45e0f5fbb21_prof);

        
        $__internal_f5ba3947fa05e8b20a34000c08c0151a5ff8cc2786d23af3e3c304dcec122cbf->leave($__internal_f5ba3947fa05e8b20a34000c08c0151a5ff8cc2786d23af3e3c304dcec122cbf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
